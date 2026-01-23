<?php
/**
 * ALIPAY API: alipay.ebpp.industry.supervision.file.upload request
 *
 * @author auto create
 * @since 1.0, 2026-01-12 20:27:42
 */
class AlipayEbppIndustrySupervisionFileUploadRequest
{
	/** 
	 * 业务场景
	 **/
	private $bizScene;
	
	/** 
	 * 上传文件二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 关联的业务ID，本次取 out_flow_id 划拨外部流水号
	 **/
	private $outBizId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizScene($bizScene)
	{
		$this->bizScene = $bizScene;
		$this->apiParas["biz_scene"] = $bizScene;
	}

	public function getBizScene()
	{
		return $this->bizScene;
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

	public function setOutBizId($outBizId)
	{
		$this->outBizId = $outBizId;
		$this->apiParas["out_biz_id"] = $outBizId;
	}

	public function getOutBizId()
	{
		return $this->outBizId;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.industry.supervision.file.upload";
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
