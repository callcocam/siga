<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 27/08/2016
 * Time: 22:35
 */

namespace Auth\View\Helper;


use Auth\Acl\Acl;

use Auth\Model\Redesociais\RedesociaisRepository;
use Interop\Container\ContainerInterface;
use Zend\Debug\Debug;
use Zend\View\Helper\AbstractHelper;

class UserIdentity extends AbstractHelper {
    /**
     * @var Acl
     */
    protected $authAcl;
    protected $containerInterface;
    protected $hasIdentity;
    protected static $labels;
    protected static $html;
    protected $providers;
    public function getAuthAcl() {
        if ($this->authAcl) {
            return $this->authAcl;
        }
        else
            return false;
    }

    /**
     * @param ContainerInterface $containerInterface
     */
    public function __construct(ContainerInterface $containerInterface) {
        $this->authAcl =$containerInterface->get(Acl::class);
        $this->hasIdentity=$this->authAcl->getIdentityManager()->hasIdentity();
        $this->containerInterface=$containerInterface;
    }

    /**
     * @return mixed
     */
    public function getHasIdentity()
    {
        return $this->hasIdentity;
    }

    public function IsAllowed($role,$Resource,$privilege){
        if($this->authAcl->hasResource($Resource) && !$this->authAcl->getIsAdmin($role)){
            return $this->authAcl->isAllowed($role, $Resource, $privilege);
        }
        else{
            return true;
        }

    }

    public function getForm($html,$form){
        echo  $this->view->messages();
        $this->view->formElementErrors()
            ->setMessageOpenFormat('<ul class="nav"><li class="erro-obrigatorio">')
            ->setMessageSeparatorString('</li>')->render($form);
        $formRender[]= $this->view->form()->openTag($form);
        $this->GerarElement($form,false);
        $primeiro = str_replace(array_keys(self::$html), array_values(self::$html), $html);
        $formRender[]= str_replace(array_keys(self::$labels), array_values(self::$labels), $primeiro);
        $formRender[]= $this->view->form()->closeTag();
        return implode("",$formRender);
    }


    public function GerarElement($form,$removeClass=true) {
        foreach ($form->getElements() as $key => $element) {
            $visible = "";
            //verifica se o usuario pode ter acesso ao campo
            if ($element->hasAttribute('placeholder')) {
                $element->setAttribute('placeholder', $this->view->translate($element->getAttribute('placeholder')));
            }
            if($removeClass){
                $element->setAttribute('class','');
            }

            if (!empty($element->getLabel())) {
                self::$labels["{{{$key}}}"] = $this->view->Html("label")->setAttributes(array("class" => "field-label", "for" => $element->getName()))->setText($this->view->translate($element->getLabel()));
            }
            // verifica se e um campo hidden [oculto]
            if ($element->getAttribute('type') === "hidden") {
                self::$html["#{$key}#"] = $this->view->formHidden($element->setLabel(''));
            } elseif ($element->getAttribute('type') === "submit") {
                self::$html["#{$key}#"] = $this->view->formButton($element);
            } elseif ($element->getAttribute('type') === "radio") {
                self:: $html["#{$key}#"] = $this->view->TwbformRadio($element);
            } elseif ($element->getAttribute('name') === "images") {
                $base_path = $this->containerInterface->get('request')->getServer('DOCUMENT_ROOT');
                $element->setOption('add-on-append',$this->view->glyphicon('picture'));
                $element->setOption('add-on-prepend',"Selec. Image");
                $element->setAttribute('type','text')->setLabel("");
                $this->labes["{{{$key}}}"]=$this->view->translate($element->getLabel());
                $this->fields["#{$key}#"]=$this->view->TwbformElement($element);
                if (!is_file(sprintf("%s%sdist%s%s", $base_path, DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, $element->getValue()))):
                    $caminho = "no_avatar.jpg";
                else:
                    $caminho = $element->getValue();
                endif;
                self::$html["#imagePreview#"] = \Base\Model\Check::Image($caminho, $element->getValue(), "420", "330", "thumbnail img-responsive preview_IMG");
               
                self::$html["#{$key}#"] = $this->view->formRow($element);
            } else {
                self::$html["#{$key}#"] = $this->view->formRow($element->setLabel(''));
            }
        }

    }

    public function login_social(){
        $ul=$this->view->Html('ul');
        $redes=$this->containerInterface->get(RedesociaisRepository::class)->findBy(['state'=>'0']);
        $li=[];
        if($redes->getResult()):
            $data=$redes->getData();
             foreach($data as $rede):
                $icone=strtolower($rede->getProvider());
                $span=$this->view->Html('span')->setClass("fa fa-{$icone} fa-3x");
                $a=$this->view->Html('a')->setAttributes(['title'=>"Cadastrar-se Usando O {$rede->getProvider()}",'href'=>$this->view->url('authenticate/default',['provider'=>$rede->getProvider(),'redirect'=>'saida'])]);
                $a->setText($span);
                $li[]=$this->view->Html('li')->setClass("social-{$icone}")->setText($a);
            endforeach;

        endif;
        if($li){
            return $ul->setText(implode("",$li));
        }
        return '';
    }

} 