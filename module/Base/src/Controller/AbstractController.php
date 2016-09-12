<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 00:14
 */

namespace Base\Controller;


use Auth\Model\Users\Users;
use Auth\Storage\IdentityManager;
use Base\Form\AbstractFilter;
use Base\Form\AbstractForm;
use Base\Model\AbstractModel;
use Base\Model\AbstractRepository;
use Base\Model\Cache;
use Base\Model\Check;
use Interop\Container\ContainerInterface;
use Zend\Crypt\Key\Derivation\Pbkdf2;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\MvcEvent;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

abstract class AbstractController extends AbstractActionController {

    /**
     * @var $containerInterface ContainerInterface
     */
    protected $containerInterface;
    /**
    * @var $IdentityManager IdentityManager
    */
    protected $IdentityManager;
    /**
    * @var $table AbstractRepository
     */
    protected $table;
    /**
    * @var AbstractModel
     */
    protected $model;
    /**
    * @var AbstractForm
    */
    protected $form;
    protected $filter;
    /**
    * @var Users
    */
    protected $user;
    protected $route;
    protected $template='/admin/admin/listar';
    protected $controller;
    protected $action;
    protected $id;
    protected $page;
    protected $data;
    protected $filtro=[];
    protected $config;
    protected $tplEditar="inserir";
    protected $colunas=3;
    protected $paginas=12;
    /**
    * @var $cache Cache
     */
    protected $cache;

    /**
     * @param MvcEvent $e
     * @return mixed
     */
    public function onDispatch(MvcEvent $e)
    {
        $this->getIdentityManager();
        $this->config=$this->containerInterface->get('ZfConfig');
        if(!$this->IsAllowed($e)){
           return $this->redirect()->toRoute('access-deny');
        }
        return parent::onDispatch($e);
    }

    /**
     * @param ContainerInterface $containerInterface
     */
    abstract  function __construct(ContainerInterface $containerInterface);

    /**
     * @return AbstractRepository
     */
    public function getTable()
    {
        return $this->containerInterface->get($this->table);
    }

    /**
     * @return AbstractModel
     */
    public function getModel()
    {
        return $this->containerInterface->get($this->model);
    }

    /**
     * @return AbstractForm
     */
    public function getForm($form="")
    {
        if(empty($form)):
            if(is_string($this->form))
                $this->form=$this->containerInterface->get($this->form);
            else
                return $this->form;
        else:
            $this->form=$this->containerInterface->get($form);
        endif;
        return $this->form;
    }

    /**
     * @return AbstractFilter
     */
    public function getFilter($filter="")
    {
        if(empty($filter)):
            $this->filter=$this->containerInterface->get($this->filter);
        else:
            $this->filter=$this->containerInterface->get($filter);
        endif;
        return $this->filter;
    }

    /**
     * @return mixed
     */
    public function getData($pega=false)
    {
        $request=$this->getRequest();
        if(!$request->isPost()):
            return [];
        endif;
        if(!$this->data && !$pega){
            $this->data=array_merge_recursive($request->getPost()->toArray(),
                $request->getFiles()->toArray());
        }
        return $this->data;
    }

    /**
     * @return IdentityManager
     */
    public function getIdentityManager()
    {
        $this->IdentityManager=$this->containerInterface->get(IdentityManager::class);
        $this->user=$this->IdentityManager->hasIdentity();
        return $this->IdentityManager;
    }

    /**
     * @return mixed
     */
    public function getCache()
    {
        $this->cache=$this->containerInterface->get(Cache::class);
        return $this->cache;
    }



    public function indexAction()
    {

        if(!$this->IdentityManager->hasIdentity()){
            $this->Messages()->flashInfo("ACESSO NEGADO, POR FAVOR FAÇA OGIN DE USUARIO");
            return $this->redirect()->toRoute($this->config->routeAuthenticate);
        }
        $this->page=$this->params()->fromRoute('page','1');
        if($this->table):
            $this->filtro=$this->getData();
            $this->filtro['asset_id']=$this->controller;
            $this->data=$this->getTable()->select($this->filtro,$this->page,$this->paginas);
            $this->data=$this->data->toArray();
        endif;
        $view=$this->getView($this->data);
        $view->setTemplate($this->template);
        return $view;
    }

    public function createAction()
    {
        if(!$this->IdentityManager->hasIdentity()){
            $this->Messages()->flashInfo("ACESSO NEGADO, POR FAVOR FAÇA OGIN DE USUARIO");
            return $this->redirect()->toRoute($this->config->routeAuthenticate);
        }
        $this->form=$this->getForm();
        $view=$this->getView($this->data);
        $view->setVariable('form',$this->form);
        $view->setTemplate('/admin/admin/editar');
        return $view;
    }

    public function updateAction()
    {
        if(!$this->IdentityManager->hasIdentity()){
            $this->Messages()->flashInfo("ACESSO NEGADO, POR FAVOR FAÇA OGIN DE USUARIO");
            return $this->redirect()->toRoute($this->config->routeAuthenticate);
        }
        $id=$this->params()->fromRoute('id','0');
        if(!(int)$id){
            return $this->redirect()->toRoute($this->route);
        }
        $this->getTable()->find($id,false);
        if(!$this->getTable()->getData()->getResult()){
            return $this->redirect()->toRoute($this->route);
        }
        $this->form=$this->getForm();
        $this->form->setData($this->getTable()->getData()->getData());
        $view=$this->getView($this->data);
        $view->setVariable('form',$this->form);
        $view->setTemplate('/admin/admin/editar');
        return $view;
    }

    public function deleteAction()
    {
        if(!$this->IdentityManager->hasIdentity()){
            $this->Messages()->flashInfo("ACESSO NEGADO, POR FAVOR FAÇA OGIN DE USUARIO");
            return $this->redirect()->toRoute($this->config->routeAuthenticate);
        }
        $id=$this->params()->fromRoute('id','0');
        if(!(int)$id){
            $this->Messages()->flashError("VOCÊ DEVE PASAR UM CODIGO VALIDO!");
            return $this->redirect()->toRoute($this->route);
        }
        $this->getTable()->find($id,false);
        if(!$this->getTable()->getData()->getResult()){
            $this->Messages()->flashError("O REGISTRO {$id} NÃO FOI ENCONTRADO!");
        return $this->redirect()->toRoute($this->route);
        }
        $this->getTable()->delete($id);
        if($this->getTable()->getData()->getResult()){
            $this->Messages()->flashSuccess("O REGISTRO {$id} FOI EXCLUIDO COM SUCESSO!");
        }
        return $this->redirect()->toRoute("{$this->route}/default",['controller'=>$this->controller,'action'=>'index']);
    }

    /**
     * @return JsonModel
     */
    public function finalizarAction()
    {
        $this->form=$this->getForm();
         $tempFile = null;
        if($this->getData()){
                   $tempFile = null;
                   if(isset($this->data['atachament'])){
                    if(is_array($this->data['atachament'])){
                        $fileName=$this->setFileName($this->data['atachament']['name']);
                        $this->data['atachament']['name']=$fileName;
                        $this->data['images']=$this->CheckFolder($fileName);
                    }
                  }
            /**
             * @var $mode AbstractModel
             */
                $model=$this->getModel();
                if (isset($this->data['save-copy'])):
                    $this->data['id'] = 'AUTOMATICO';
                    $model->setId(null);
                endif;
                $this->data= $this->SigaContas()->decimal($this->data);
                $model->exchangeArray($this->data);
                $this->form->setData($this->data);
                $this->data['model']=$model->toArray();
                if ($this->form->isValid()) {
                   if((int)$this->data['id']){
                        $this->getTable()->update($model);
                   }
                    else{
                        $model->setAssetId($this->controller);
                        $this->getTable()->insert($model);
                    }
                    $view=new JsonModel($this->getTable()->getData()->toArray());
                    return $view;
                }
                else
                {
                   $error=[];
                    foreach ($this->form->getMessages() as $key=> $messages){
                        foreach($messages as  $ms){
                            $error[$key]=sprintf("[%s-%s]",$key,$ms);
                        }
                    }
                    $this->data['err']=$error;
                    $this->data['error']=implode(PHP_EOL,$error);
                }

        }
        $view=new JsonModel($this->data);
        return $view;
    }

    public function getView($data){
        $view=new ViewModel($data);
        $view->setVariable('controller',$this->controller);
        $view->setVariable('route',$this->route);
        $view->setVariable('page',$this->page);
        $view->setVariable('tplEditar',$this->tplEditar);
        $view->setVariable('page',$this->page);
        $view->setVariable('config',$this->config);
        $view->setVariable('filtro',$this->filtro);
        $view->setVariable('colunas',$this->colunas);
        return $view;
    }

    //Verifica e monta o nome dos arquivos tratando a string!
    public function setFileName($Name) {
        $FileName = $this->setName(substr($Name, 0, strrpos($Name, '.')));
        $FileName =strtolower($FileName) . strrchr($Name, '.');
        return $FileName;
    }
    //Verifica e cria os diretórios com base em tipo de arquivo, ano e mês!
    //Verifica e cria os diretórios com base em tipo de arquivo, ano e mês!
    public function CheckFolder($fileName,$Folder="images") {
        $ds=DIRECTORY_SEPARATOR;
        list($y, $m) = explode('/', date('Y/m'));
        $basePath = "{$Folder}{$ds}{$y}{$ds}{$m}{$ds}";
        return sprintf("%s%s",$basePath,$fileName);
    }
    //Verifica e cria o diretório base!
    public function CreateFolder($Folder) {
        if (!file_exists($Folder) && !is_dir($Folder)):
            mkdir($Folder, 0777);
        endif;
    }
    /**
     * <b>Tranforma Nome:</b> Retira acentos e caracteres especias!
     * @param STRING $Name = Uma string qualquer
     * @return STRING um nome tratado
     */
    public function setName($Name) {
        $var = strtolower(utf8_encode($Name));
        return preg_replace('{\W}', '', preg_replace('{ +}', '_', strtr(
            utf8_decode(html_entity_decode($var)), utf8_decode('ÀÁÃÂÉÊÍÓÕÔÚÜÇÑàáãâéêíóõôúüçñ'), 'AAAAEEIOOOUUCNaaaaeeiooouucn')));
    }

    /* SESSÃO AUTH SOCIAL*/
    /**
     * @param $data
     */
    public function setDataUserSocial($data,$social){
        $issusers=$this->cache->getItem('issusers');
        $this->data['id']='';
        $this->data['codigo']=$data["identifier"];
        $this->data['identifier']=$data["identifier"];
        $this->data['asset_id']="clientes";
        $this->data['empresa']=isset($issusers['id'])?$issusers['id']:'1';
        $this->data['title']=sprintf("%s %s",$data["firstName"],$data['lastName']);
        if(empty(trim($this->data['title']))){
            $this->data['title']=$data['displayName'];
        }
        $this->data['gender']=$data["gender"];
        $this->data['age']=$data["age"];
        $this->data['birthDay']=$data["birthDay"];
        $this->data['birthMonth']=$data["birthMonth"];
        $this->data['birthYear']=$data["birthYear"];
        $this->data['phone']=$data["phone"];
        $this->data['url']=Check::Name($data['name']);
        $this->data['cnpj']='';
        $this->data['email']=$data["email"];
        $this->data['username']=$social;
        $this->data['images']='/no_avatar.jpg';
        $this->data['description']=$data["description"];;
        $this->data['password']=$this->encryptPassword($data['email'],$data['identifier']);
        $this->data['usr_password_confirm']=$this->encryptPassword($data['email'],$data['identifier']);
        $this->data['usr_registration_token']='active';
        $this->data['role_id']='5';
        $this->data['state']='0';
        $this->data['access']='3';
        $this->data['created']=date("d-m-Y");
        $this->data['modified']=date("d-m-Y H:i:s");

    }

    public function encryptPassword($login, $password) {
        return base64_encode(Pbkdf2::calc('sha256', $password, $login, 10000, strlen($this->config->staticsalt * 2)));
    }

    public function prepareData($data) {
        if (!empty($data['password'])):
            $this->data['password'] = $this->encryptPassword($data['email'], $data['password']);
            $this->data['usr_password_confirm'] = $this->encryptPassword($data['email'], $data['usr_password_confirm']);
            $this->data['usr_registration_token'] = md5(uniqid(mt_rand(), true));
        endif;
        return $this->data;
    }

    /**
     * Redirect to the last known URL
     *
     * @return boolean
     */
    protected function doRedirect()
    {

        $redirect = $this->getEvent()->getRouteMatch()->getParam('redirect','index');
        if (preg_match('|://|', $redirect)) {
           return $this->redirect()->toUrl($redirect);
        } else {
            return $this->redirect()->toRoute("{$this->route}/default",['controller'=>$this->controller,'action'=>$redirect]);
        }

        return false;
    }

} 