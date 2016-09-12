<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Pg\Model\Pgassinaturas;

use Base\Model\AbstractModel;
use Zend\I18n\Validator\DateTime;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Pgassinaturas extends AbstractModel
{

    protected $title = '';

    protected $pre_approval_details = null;

    protected $pre_approval_name = null;

    protected $pre_pproval_charge = 'manual';

    protected $pre_approval_period = 'MONTHLY';

    protected $pre_approval_Initialdate = '0000-00-00 00:00:00';

    protected $pre_approval_dayofweek = 'FRIDAY';

    protected $pre_pproval_dayofmonth = '28';

    protected $pre_approval_dayofyear = null;

    protected $pre_approval_final_date = '0000-00-00 00:00:00';

    protected $pre_approval_amount_per_payment = '0.00';

    protected $pre_approval_max_total_amount = '0.00';

    protected $pre_approval_max_amount_per_period = '0.00';

    protected $redirect_url = null;

    protected $review_url = null;

    protected $images = null;

    /**
     * get title
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * get pre_approval_details
     *
     * @return varchar
     */
    public function getPreApprovalDetails()
    {
        return $this->pre_approval_details;
    }

    /**
     * get pre_approval_name
     *
     * @return varchar
     */
    public function getPreApprovalName()
    {
        return $this->pre_approval_name;
    }

    /**
     * get pre_pproval_charge
     *
     * @return varchar
     */
    public function getPrePprovalCharge()
    {
        return $this->pre_pproval_charge;
    }

    /**
     * get pre_approval_period
     *
     * @return varchar
     */
    public function getPreApprovalPeriod()
    {
        return $this->pre_approval_period;
    }

    /**
     * get pre_approval_Initialdate
     *
     * @return datetime
     */
    public function getPreApprovalInitialdate()
    {
        if($this->pre_approval_Initialdate instanceof \DateTime){
            return $this->pre_approval_Initialdate->format('Y-m-d H:i:s');
        }
        return $this->pre_approval_Initialdate;
    }

    /**
     * get pre_approval_dayofweek
     *
     * @return varchar
     */
    public function getPreApprovalDayofweek()
    {
        return $this->pre_approval_dayofweek;
    }

    /**
     * get pre_pproval_dayofmonth
     *
     * @return int
     */
    public function getPrePprovalDayofmonth()
    {
        return $this->pre_pproval_dayofmonth;
    }

    /**
     * get pre_approval_dayofyear
     *
     * @return varchar
     */
    public function getPreApprovalDayofyear()
    {
        return $this->pre_approval_dayofyear;
    }

    /**
     * get pre_approval_final_date
     *
     * @return datetime
     */
    public function getPreApprovalFinalDate()
    {
        if($this->pre_approval_final_date instanceof \DateTime){
            return $this->pre_approval_final_date->format('Y-m-d H:i:s');
        }
        return $this->pre_approval_final_date;
    }

    /**
     * get pre_approval_amount_per_payment
     *
     * @return decimal
     */
    public function getPreApprovalAmountPerPayment()
    {
        return $this->pre_approval_amount_per_payment;
    }

    /**
     * get pre_approval_max_total_amount
     *
     * @return decimal
     */
    public function getPreApprovalMaxTotalAmount()
    {
        return $this->pre_approval_max_total_amount;
    }

    /**
     * get pre_approval_max_amount_per_period
     *
     * @return decimal
     */
    public function getPreApprovalMaxAmountPerPeriod()
    {
        return $this->pre_approval_max_amount_per_period;
    }

    /**
     * get redirect_url
     *
     * @return varchar
     */
    public function getRedirectUrl()
    {
        return $this->redirect_url;
    }

    /**
     * get review_url
     *
     * @return varchar
     */
    public function getReviewUrl()
    {
        return $this->review_url;
    }

    /**
     * get images
     *
     * @return varchar
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * set title
     *
     * @return varchar
     */
    public function setTitle($title = '')
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set pre_approval_details
     *
     * @return varchar
     */
    public function setPreApprovalDetails($pre_approval_details = null)
    {
        $this->pre_approval_details=$pre_approval_details;
        return $this;
    }

    /**
     * set pre_approval_name
     *
     * @return varchar
     */
    public function setPreApprovalName($pre_approval_name = null)
    {
        $this->pre_approval_name=$pre_approval_name;
        return $this;
    }

    /**
     * set pre_pproval_charge
     *
     * @return varchar
     */
    public function setPrePprovalCharge($pre_pproval_charge = 'manual')
    {
        $this->pre_pproval_charge=$pre_pproval_charge;
        return $this;
    }

    /**
     * set pre_approval_period
     *
     * @return varchar
     */
    public function setPreApprovalPeriod($pre_approval_period = 'MONTHLY')
    {
        $this->pre_approval_period=$pre_approval_period;
        return $this;
    }

    /**
     * set pre_approval_Initialdate
     *
     * @return datetime
     */
    public function setPreApprovalInitialdate($pre_approval_Initialdate = '0000-00-00 00:00:00')
    {
        $this->pre_approval_Initialdate=new \DateTime($pre_approval_Initialdate);
        return $this;
    }

    /**
     * set pre_approval_dayofweek
     *
     * @return varchar
     */
    public function setPreApprovalDayofweek($pre_approval_dayofweek = 'FRIDAY')
    {
        $this->pre_approval_dayofweek=$pre_approval_dayofweek;
        return $this;
    }

    /**
     * set pre_pproval_dayofmonth
     *
     * @return int
     */
    public function setPrePprovalDayofmonth($pre_pproval_dayofmonth = '28')
    {
        $this->pre_pproval_dayofmonth=$pre_pproval_dayofmonth;
        return $this;
    }

    /**
     * set pre_approval_dayofyear
     *
     * @return varchar
     */
    public function setPreApprovalDayofyear($pre_approval_dayofyear = null)
    {
        $this->pre_approval_dayofyear=$pre_approval_dayofyear;
        return $this;
    }

    /**
     * set pre_approval_final_date
     *
     * @return datetime
     */
    public function setPreApprovalFinalDate($pre_approval_final_date = '0000-00-00 00:00:00')
    {
        $this->pre_approval_final_date=new \DateTime($pre_approval_final_date);
        return $this;
    }

    /**
     * set pre_approval_amount_per_payment
     *
     * @return decimal
     */
    public function setPreApprovalAmountPerPayment($pre_approval_amount_per_payment = '0.00')
    {
        $this->pre_approval_amount_per_payment=$pre_approval_amount_per_payment;
        return $this;
    }

    /**
     * set pre_approval_max_total_amount
     *
     * @return decimal
     */
    public function setPreApprovalMaxTotalAmount($pre_approval_max_total_amount = '0.00')
    {
        $this->pre_approval_max_total_amount=$pre_approval_max_total_amount;
        return $this;
    }

    /**
     * set pre_approval_max_amount_per_period
     *
     * @return decimal
     */
    public function setPreApprovalMaxAmountPerPeriod($pre_approval_max_amount_per_period = '0.00')
    {
        $this->pre_approval_max_amount_per_period=$pre_approval_max_amount_per_period;
        return $this;
    }

    /**
     * set redirect_url
     *
     * @return varchar
     */
    public function setRedirectUrl($redirect_url = null)
    {
        $this->redirect_url=$redirect_url;
        return $this;
    }

    /**
     * set review_url
     *
     * @return varchar
     */
    public function setReviewUrl($review_url = null)
    {
        $this->review_url=$review_url;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = null)
    {
        $this->images=$images;
        return $this;
    }


}