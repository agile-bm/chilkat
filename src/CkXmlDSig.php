<?php

namespace AgileBM\Chilkat;

class CkXmlDSig {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkXmlDSig') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkXmlDSig();
	}

	function get_Utf8() {
		return CkXmlDSig_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkXmlDSig_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkXmlDSig_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkXmlDSig_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkXmlDSig_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_ExternalRefDirs($str) {
		CkXmlDSig_get_ExternalRefDirs($this->_cPtr,$str);
	}

	function externalRefDirs() {
		return CkXmlDSig_externalRefDirs($this->_cPtr);
	}

	function put_ExternalRefDirs($newVal) {
		CkXmlDSig_put_ExternalRefDirs($this->_cPtr,$newVal);
	}

	function get_IgnoreExternalRefs() {
		return CkXmlDSig_get_IgnoreExternalRefs($this->_cPtr);
	}

	function put_IgnoreExternalRefs($newVal) {
		CkXmlDSig_put_IgnoreExternalRefs($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkXmlDSig_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkXmlDSig_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkXmlDSig_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkXmlDSig_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkXmlDSig_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkXmlDSig_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkXmlDSig_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkXmlDSig_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumReferences() {
		return CkXmlDSig_get_NumReferences($this->_cPtr);
	}

	function get_NumSignatures() {
		return CkXmlDSig_get_NumSignatures($this->_cPtr);
	}

	function get_RefFailReason() {
		return CkXmlDSig_get_RefFailReason($this->_cPtr);
	}

	function get_Selector() {
		return CkXmlDSig_get_Selector($this->_cPtr);
	}

	function put_Selector($newVal) {
		CkXmlDSig_put_Selector($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkXmlDSig_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkXmlDSig_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkXmlDSig_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkXmlDSig_version($this->_cPtr);
	}

	function get_WithComments() {
		return CkXmlDSig_get_WithComments($this->_cPtr);
	}

	function put_WithComments($newVal) {
		CkXmlDSig_put_WithComments($this->_cPtr,$newVal);
	}

	function canonicalizeFragment($xml,$fragmentId,$version,$prefixList,$withComments) {
		return CkXmlDSig_canonicalizeFragment($this->_cPtr,$xml,$fragmentId,$version,$prefixList,$withComments);
	}

	function canonicalizeXml($xml,$version,$withComments) {
		return CkXmlDSig_canonicalizeXml($this->_cPtr,$xml,$version,$withComments);
	}

	function GetCerts($sa) {
		return CkXmlDSig_GetCerts($this->_cPtr,$sa);
	}

	function GetKeyInfo() {
		$r=CkXmlDSig_GetKeyInfo($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkXml($r);
		}
		return $r;
	}

	function GetPublicKey() {
		$r=CkXmlDSig_GetPublicKey($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPublicKey($r);
		}
		return $r;
	}

	function IsReferenceExternal($index) {
		return CkXmlDSig_IsReferenceExternal($this->_cPtr,$index);
	}

	function LoadSignature($xmlSig) {
		return CkXmlDSig_LoadSignature($this->_cPtr,$xmlSig);
	}

	function LoadSignatureBd($binData) {
		return CkXmlDSig_LoadSignatureBd($this->_cPtr,$binData);
	}

	function LoadSignatureSb($sbXmlSig) {
		return CkXmlDSig_LoadSignatureSb($this->_cPtr,$sbXmlSig);
	}

	function referenceUri($index) {
		return CkXmlDSig_referenceUri($this->_cPtr,$index);
	}

	function SaveLastError($path) {
		return CkXmlDSig_SaveLastError($this->_cPtr,$path);
	}

	function SetHmacKey($key,$encoding) {
		return CkXmlDSig_SetHmacKey($this->_cPtr,$key,$encoding);
	}

	function SetPublicKey($pubKey) {
		return CkXmlDSig_SetPublicKey($this->_cPtr,$pubKey);
	}

	function SetRefDataBd($index,$binData) {
		return CkXmlDSig_SetRefDataBd($this->_cPtr,$index,$binData);
	}

	function SetRefDataFile($index,$path) {
		return CkXmlDSig_SetRefDataFile($this->_cPtr,$index,$path);
	}

	function SetRefDataSb($index,$sb,$charset) {
		return CkXmlDSig_SetRefDataSb($this->_cPtr,$index,$sb,$charset);
	}

	function UseCertVault($certVault) {
		return CkXmlDSig_UseCertVault($this->_cPtr,$certVault);
	}

	function VerifyReferenceDigest($index) {
		return CkXmlDSig_VerifyReferenceDigest($this->_cPtr,$index);
	}

	function VerifySignature($verifyReferenceDigests) {
		return CkXmlDSig_VerifySignature($this->_cPtr,$verifyReferenceDigests);
	}
}