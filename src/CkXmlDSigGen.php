<?php

namespace AgileBM\Chilkat;

class CkXmlDSigGen {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_CkXmlDSigGen') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkXmlDSigGen();
	}

	function get_Utf8() {
		return CkXmlDSigGen_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkXmlDSigGen_put_Utf8($this->_cPtr,$b);
	}

	function get_Behaviors($str) {
		CkXmlDSigGen_get_Behaviors($this->_cPtr,$str);
	}

	function behaviors() {
		return CkXmlDSigGen_behaviors($this->_cPtr);
	}

	function put_Behaviors($newVal) {
		CkXmlDSigGen_put_Behaviors($this->_cPtr,$newVal);
	}

	function get_CustomKeyInfoXml($str) {
		CkXmlDSigGen_get_CustomKeyInfoXml($this->_cPtr,$str);
	}

	function customKeyInfoXml() {
		return CkXmlDSigGen_customKeyInfoXml($this->_cPtr);
	}

	function put_CustomKeyInfoXml($newVal) {
		CkXmlDSigGen_put_CustomKeyInfoXml($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkXmlDSigGen_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkXmlDSigGen_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkXmlDSigGen_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_IncNamespacePrefix($str) {
		CkXmlDSigGen_get_IncNamespacePrefix($this->_cPtr,$str);
	}

	function incNamespacePrefix() {
		return CkXmlDSigGen_incNamespacePrefix($this->_cPtr);
	}

	function put_IncNamespacePrefix($newVal) {
		CkXmlDSigGen_put_IncNamespacePrefix($this->_cPtr,$newVal);
	}

	function get_IncNamespaceUri($str) {
		CkXmlDSigGen_get_IncNamespaceUri($this->_cPtr,$str);
	}

	function incNamespaceUri() {
		return CkXmlDSigGen_incNamespaceUri($this->_cPtr);
	}

	function put_IncNamespaceUri($newVal) {
		CkXmlDSigGen_put_IncNamespaceUri($this->_cPtr,$newVal);
	}

	function get_KeyInfoId($str) {
		CkXmlDSigGen_get_KeyInfoId($this->_cPtr,$str);
	}

	function keyInfoId() {
		return CkXmlDSigGen_keyInfoId($this->_cPtr);
	}

	function put_KeyInfoId($newVal) {
		CkXmlDSigGen_put_KeyInfoId($this->_cPtr,$newVal);
	}

	function get_KeyInfoKeyName($str) {
		CkXmlDSigGen_get_KeyInfoKeyName($this->_cPtr,$str);
	}

	function keyInfoKeyName() {
		return CkXmlDSigGen_keyInfoKeyName($this->_cPtr);
	}

	function put_KeyInfoKeyName($newVal) {
		CkXmlDSigGen_put_KeyInfoKeyName($this->_cPtr,$newVal);
	}

	function get_KeyInfoType($str) {
		CkXmlDSigGen_get_KeyInfoType($this->_cPtr,$str);
	}

	function keyInfoType() {
		return CkXmlDSigGen_keyInfoType($this->_cPtr);
	}

	function put_KeyInfoType($newVal) {
		CkXmlDSigGen_put_KeyInfoType($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkXmlDSigGen_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkXmlDSigGen_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkXmlDSigGen_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkXmlDSigGen_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkXmlDSigGen_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkXmlDSigGen_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkXmlDSigGen_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkXmlDSigGen_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_SigId($str) {
		CkXmlDSigGen_get_SigId($this->_cPtr,$str);
	}

	function sigId() {
		return CkXmlDSigGen_sigId($this->_cPtr);
	}

	function put_SigId($newVal) {
		CkXmlDSigGen_put_SigId($this->_cPtr,$newVal);
	}

	function get_SigLocation($str) {
		CkXmlDSigGen_get_SigLocation($this->_cPtr,$str);
	}

	function sigLocation() {
		return CkXmlDSigGen_sigLocation($this->_cPtr);
	}

	function put_SigLocation($newVal) {
		CkXmlDSigGen_put_SigLocation($this->_cPtr,$newVal);
	}

	function get_SigLocationMod() {
		return CkXmlDSigGen_get_SigLocationMod($this->_cPtr);
	}

	function put_SigLocationMod($newVal) {
		CkXmlDSigGen_put_SigLocationMod($this->_cPtr,$newVal);
	}

	function get_SigNamespacePrefix($str) {
		CkXmlDSigGen_get_SigNamespacePrefix($this->_cPtr,$str);
	}

	function sigNamespacePrefix() {
		return CkXmlDSigGen_sigNamespacePrefix($this->_cPtr);
	}

	function put_SigNamespacePrefix($newVal) {
		CkXmlDSigGen_put_SigNamespacePrefix($this->_cPtr,$newVal);
	}

	function get_SigNamespaceUri($str) {
		CkXmlDSigGen_get_SigNamespaceUri($this->_cPtr,$str);
	}

	function sigNamespaceUri() {
		return CkXmlDSigGen_sigNamespaceUri($this->_cPtr);
	}

	function put_SigNamespaceUri($newVal) {
		CkXmlDSigGen_put_SigNamespaceUri($this->_cPtr,$newVal);
	}

	function get_SignedInfoCanonAlg($str) {
		CkXmlDSigGen_get_SignedInfoCanonAlg($this->_cPtr,$str);
	}

	function signedInfoCanonAlg() {
		return CkXmlDSigGen_signedInfoCanonAlg($this->_cPtr);
	}

	function put_SignedInfoCanonAlg($newVal) {
		CkXmlDSigGen_put_SignedInfoCanonAlg($this->_cPtr,$newVal);
	}

	function get_SignedInfoDigestMethod($str) {
		CkXmlDSigGen_get_SignedInfoDigestMethod($this->_cPtr,$str);
	}

	function signedInfoDigestMethod() {
		return CkXmlDSigGen_signedInfoDigestMethod($this->_cPtr);
	}

	function put_SignedInfoDigestMethod($newVal) {
		CkXmlDSigGen_put_SignedInfoDigestMethod($this->_cPtr,$newVal);
	}

	function get_SignedInfoId($str) {
		CkXmlDSigGen_get_SignedInfoId($this->_cPtr,$str);
	}

	function signedInfoId() {
		return CkXmlDSigGen_signedInfoId($this->_cPtr);
	}

	function put_SignedInfoId($newVal) {
		CkXmlDSigGen_put_SignedInfoId($this->_cPtr,$newVal);
	}

	function get_SignedInfoPrefixList($str) {
		CkXmlDSigGen_get_SignedInfoPrefixList($this->_cPtr,$str);
	}

	function signedInfoPrefixList() {
		return CkXmlDSigGen_signedInfoPrefixList($this->_cPtr);
	}

	function put_SignedInfoPrefixList($newVal) {
		CkXmlDSigGen_put_SignedInfoPrefixList($this->_cPtr,$newVal);
	}

	function get_SigningAlg($str) {
		CkXmlDSigGen_get_SigningAlg($this->_cPtr,$str);
	}

	function signingAlg() {
		return CkXmlDSigGen_signingAlg($this->_cPtr);
	}

	function put_SigningAlg($newVal) {
		CkXmlDSigGen_put_SigningAlg($this->_cPtr,$newVal);
	}

	function get_SigValueId($str) {
		CkXmlDSigGen_get_SigValueId($this->_cPtr,$str);
	}

	function sigValueId() {
		return CkXmlDSigGen_sigValueId($this->_cPtr);
	}

	function put_SigValueId($newVal) {
		CkXmlDSigGen_put_SigValueId($this->_cPtr,$newVal);
	}

	function get_UncommonOptions($str) {
		CkXmlDSigGen_get_UncommonOptions($this->_cPtr,$str);
	}

	function uncommonOptions() {
		return CkXmlDSigGen_uncommonOptions($this->_cPtr);
	}

	function put_UncommonOptions($newVal) {
		CkXmlDSigGen_put_UncommonOptions($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkXmlDSigGen_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkXmlDSigGen_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkXmlDSigGen_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkXmlDSigGen_version($this->_cPtr);
	}

	function get_X509Type($str) {
		CkXmlDSigGen_get_X509Type($this->_cPtr,$str);
	}

	function x509Type() {
		return CkXmlDSigGen_x509Type($this->_cPtr);
	}

	function put_X509Type($newVal) {
		CkXmlDSigGen_put_X509Type($this->_cPtr,$newVal);
	}

	function AddEnvelopedRef($id,$content,$digestMethod,$canonMethod,$refType) {
		return CkXmlDSigGen_AddEnvelopedRef($this->_cPtr,$id,$content,$digestMethod,$canonMethod,$refType);
	}

	function AddExternalBinaryRef($uri,$content,$digestMethod,$refType) {
		return CkXmlDSigGen_AddExternalBinaryRef($this->_cPtr,$uri,$content,$digestMethod,$refType);
	}

	function AddExternalFileRef($uri,$localFilePath,$digestMethod,$refType) {
		return CkXmlDSigGen_AddExternalFileRef($this->_cPtr,$uri,$localFilePath,$digestMethod,$refType);
	}

	function AddExternalTextRef($uri,$content,$charset,$includeBom,$digestMethod,$refType) {
		return CkXmlDSigGen_AddExternalTextRef($this->_cPtr,$uri,$content,$charset,$includeBom,$digestMethod,$refType);
	}

	function AddExternalXmlRef($uri,$content,$digestMethod,$canonMethod,$refType) {
		return CkXmlDSigGen_AddExternalXmlRef($this->_cPtr,$uri,$content,$digestMethod,$canonMethod,$refType);
	}

	function AddObject($id,$content,$mimeType,$encoding) {
		return CkXmlDSigGen_AddObject($this->_cPtr,$id,$content,$mimeType,$encoding);
	}

	function AddObjectRef($id,$digestMethod,$canonMethod,$prefixList,$refType) {
		return CkXmlDSigGen_AddObjectRef($this->_cPtr,$id,$digestMethod,$canonMethod,$prefixList,$refType);
	}

	function AddSameDocRef($id,$digestMethod,$canonMethod,$prefixList,$refType) {
		return CkXmlDSigGen_AddSameDocRef($this->_cPtr,$id,$digestMethod,$canonMethod,$prefixList,$refType);
	}

	function AddSignatureNamespace($nsPrefix,$nsUri) {
		return CkXmlDSigGen_AddSignatureNamespace($this->_cPtr,$nsPrefix,$nsUri);
	}

	function constructSignedInfo($sbXml) {
		return CkXmlDSigGen_constructSignedInfo($this->_cPtr,$sbXml);
	}

	function createXmlDSig($inXml) {
		return CkXmlDSigGen_createXmlDSig($this->_cPtr,$inXml);
	}

	function CreateXmlDSigSb($sbXml) {
		return CkXmlDSigGen_CreateXmlDSigSb($this->_cPtr,$sbXml);
	}

	function SaveLastError($path) {
		return CkXmlDSigGen_SaveLastError($this->_cPtr,$path);
	}

	function SetHmacKey($key,$encoding) {
		return CkXmlDSigGen_SetHmacKey($this->_cPtr,$key,$encoding);
	}

	function SetPrivateKey($privKey) {
		return CkXmlDSigGen_SetPrivateKey($this->_cPtr,$privKey);
	}

	function SetRefIdAttr($uri_or_id,$value) {
		return CkXmlDSigGen_SetRefIdAttr($this->_cPtr,$uri_or_id,$value);
	}

	function SetX509Cert($cert,$usePrivateKey) {
		return CkXmlDSigGen_SetX509Cert($this->_cPtr,$cert,$usePrivateKey);
	}
}