<?php
/**
 * ALIPAY API: alipay.offline.provider.npassporter.face.verify request
 *
 * @author auto create
 * @since 1.0, 2025-12-12 11:02:42
 */
class AlipayOfflineProviderNpassporterFaceVerifyRequest
{
	/** 
	 * 用户在支付宝uid
	 **/
	private $alipayId;
	
	/** 
	 * 文件内容
	 **/
	private $fileContent;
	
	/** 
	 * 用户在支付宝uid
	 **/
	private $openId;
	
	/** 
	 * 照片URL
	 **/
	private $photoUrl;
	
	/** 
	 * 项目ID
	 **/
	private $projectId;
	
	/** 
	 * 解决方案
	 **/
	private $solutionType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAlipayId($alipayId)
	{
		$this->alipayId = $alipayId;
		$this->apiParas["alipay_id"] = $alipayId;
	}

	public function getAlipayId()
	{
		return $this->alipayId;
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

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setPhotoUrl($photoUrl)
	{
		$this->photoUrl = $photoUrl;
		$this->apiParas["photo_url"] = $photoUrl;
	}

	public function getPhotoUrl()
	{
		return $this->photoUrl;
	}

	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
		$this->apiParas["project_id"] = $projectId;
	}

	public function getProjectId()
	{
		return $this->projectId;
	}

	public function setSolutionType($solutionType)
	{
		$this->solutionType = $solutionType;
		$this->apiParas["solution_type"] = $solutionType;
	}

	public function getSolutionType()
	{
		return $this->solutionType;
	}

	public function getApiMethodName()
	{
		return "alipay.offline.provider.npassporter.face.verify";
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
