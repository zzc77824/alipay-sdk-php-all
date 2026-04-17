<?php
/**
 * ALIPAY API: alipay.commerce.medical.insurance.file.upload request
 *
 * @author auto create
 * @since 1.0, 2025-12-22 17:57:42
 */
class AlipayCommerceMedicalInsuranceFileUploadRequest
{
	/** 
	 * 理赔申请号（保司）
	 **/
	private $applyNo;
	
	/** 
	 * 支付宝生成的业务流水号
	 **/
	private $bizNo;
	
	/** 
	 * 报案号（保司）
	 **/
	private $claimNo;
	
	/** 
	 * 支付宝给出固定值,见接口文档附录
	 **/
	private $claimStatus;
	
	/** 
	 * 保司类型
	 **/
	private $companyType;
	
	/** 
	 * 文件内容
	 **/
	private $fileContent;
	
	/** 
	 * 理赔通知书文件编码
	 **/
	private $fileNo;
	
	/** 
	 * 支付宝open_id
	 **/
	private $openId;
	
	/** 
	 * 支付宝user_id
	 **/
	private $userId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApplyNo($applyNo)
	{
		$this->applyNo = $applyNo;
		$this->apiParas["apply_no"] = $applyNo;
	}

	public function getApplyNo()
	{
		return $this->applyNo;
	}

	public function setBizNo($bizNo)
	{
		$this->bizNo = $bizNo;
		$this->apiParas["biz_no"] = $bizNo;
	}

	public function getBizNo()
	{
		return $this->bizNo;
	}

	public function setClaimNo($claimNo)
	{
		$this->claimNo = $claimNo;
		$this->apiParas["claim_no"] = $claimNo;
	}

	public function getClaimNo()
	{
		return $this->claimNo;
	}

	public function setClaimStatus($claimStatus)
	{
		$this->claimStatus = $claimStatus;
		$this->apiParas["claim_status"] = $claimStatus;
	}

	public function getClaimStatus()
	{
		return $this->claimStatus;
	}

	public function setCompanyType($companyType)
	{
		$this->companyType = $companyType;
		$this->apiParas["company_type"] = $companyType;
	}

	public function getCompanyType()
	{
		return $this->companyType;
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

	public function setFileNo($fileNo)
	{
		$this->fileNo = $fileNo;
		$this->apiParas["file_no"] = $fileNo;
	}

	public function getFileNo()
	{
		return $this->fileNo;
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.medical.insurance.file.upload";
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
