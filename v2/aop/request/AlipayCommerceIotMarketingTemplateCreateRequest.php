<?php
/**
 * ALIPAY API: alipay.commerce.iot.marketing.template.create request
 *
 * @author auto create
 * @since 1.0, 2026-03-23 16:02:44
 */
class AlipayCommerceIotMarketingTemplateCreateRequest
{
	/** 
	 * 模版生效结束时间戳
	 **/
	private $endTime;
	
	/** 
	 * 投放模板图片，为二进制文件
	 **/
	private $fileContent;
	
	/** 
	 * 图片横屏竖屏配置 横屏：1   竖屏：2
	 **/
	private $hvScreen;
	
	/** 
	 * 电子海报:NORMAL_DISPLAY
支付结果页:PAY_SUCCESS_RESULT
商户信息海报:MERCHANT_INFO_POSTER
	 **/
	private $spaceCode;
	
	/** 
	 * 模版生效开始时间戳
	 **/
	private $startTime;
	
	/** 
	 * 模版名称
	 **/
	private $templateName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFileContent($fileContent)
	{
		$this->fileContent = $fileContent;
		$this->apiParas["file_content"] = $fileContent;
	}

	public function getFileContent()
	{
		return $this->fileContent;
	}

	public function setHvScreen($hvScreen)
	{
		$this->hvScreen = $hvScreen;
		$this->apiParas["hv_screen"] = $hvScreen;
	}

	public function getHvScreen()
	{
		return $this->hvScreen;
	}

	public function setSpaceCode($spaceCode)
	{
		$this->spaceCode = $spaceCode;
		$this->apiParas["space_code"] = $spaceCode;
	}

	public function getSpaceCode()
	{
		return $this->spaceCode;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTemplateName($templateName)
	{
		$this->templateName = $templateName;
		$this->apiParas["template_name"] = $templateName;
	}

	public function getTemplateName()
	{
		return $this->templateName;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.iot.marketing.template.create";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setReturnUrl($returnUrl)
	{
		$this->returnUrl=$returnUrl;
	}

	public function getReturnUrl()
	{
		return $this->returnUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

  public function setNeedEncrypt($needEncrypt)
  {

     $this->needEncrypt=$needEncrypt;

  }

  public function getNeedEncrypt()
  {
    return $this->needEncrypt;
  }

}
