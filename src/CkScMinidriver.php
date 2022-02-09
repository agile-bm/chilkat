<?php

namespace AgileBM\Chilkat;

class CkScMinidriver {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkScMinidriver') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkScMinidriver();
	}

	function get_Utf8() {
		return CkScMinidriver_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkScMinidriver_put_Utf8($this->_cPtr,$b);
	}

	function get_Atr($str) {
		CkScMinidriver_get_Atr($this->_cPtr,$str);
	}

	function atr() {
		return CkScMinidriver_atr($this->_cPtr);
	}

	function get_CardName($str) {
		CkScMinidriver_get_CardName($this->_cPtr,$str);
	}

	function cardName() {
		return CkScMinidriver_cardName($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkScMinidriver_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkScMinidriver_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkScMinidriver_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkScMinidriver_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkScMinidriver_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkScMinidriver_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkScMinidriver_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkScMinidriver_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkScMinidriver_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkScMinidriver_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkScMinidriver_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_MaxContainers() {
		return CkScMinidriver_get_MaxContainers($this->_cPtr);
	}

	function get_RsaPaddingHash($str) {
		CkScMinidriver_get_RsaPaddingHash($this->_cPtr,$str);
	}

	function rsaPaddingHash() {
		return CkScMinidriver_rsaPaddingHash($this->_cPtr);
	}

	function put_RsaPaddingHash($newVal) {
		CkScMinidriver_put_RsaPaddingHash($this->_cPtr,$newVal);
	}

	function get_RsaPaddingScheme($str) {
		CkScMinidriver_get_RsaPaddingScheme($this->_cPtr,$str);
	}

	function rsaPaddingScheme() {
		return CkScMinidriver_rsaPaddingScheme($this->_cPtr);
	}

	function put_RsaPaddingScheme($newVal) {
		CkScMinidriver_put_RsaPaddingScheme($this->_cPtr,$newVal);
	}

	function get_UncommonOptions($str) {
		CkScMinidriver_get_UncommonOptions($this->_cPtr,$str);
	}

	function uncommonOptions() {
		return CkScMinidriver_uncommonOptions($this->_cPtr);
	}

	function put_UncommonOptions($newVal) {
		CkScMinidriver_put_UncommonOptions($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkScMinidriver_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkScMinidriver_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkScMinidriver_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkScMinidriver_version($this->_cPtr);
	}

	function AcquireContext($readerName) {
		return CkScMinidriver_AcquireContext($this->_cPtr,$readerName);
	}

	function CardDeleteFile($dirName,$fileName) {
		return CkScMinidriver_CardDeleteFile($this->_cPtr,$dirName,$fileName);
	}

	function DeleteCert($cert,$delPrivKey) {
		return CkScMinidriver_DeleteCert($this->_cPtr,$cert,$delPrivKey);
	}

	function DeleteContext() {
		return CkScMinidriver_DeleteContext($this->_cPtr);
	}

	function DeleteKeyContainer($containerIndex) {
		return CkScMinidriver_DeleteKeyContainer($this->_cPtr,$containerIndex);
	}

	function EnumFiles($dirName,$st) {
		return CkScMinidriver_EnumFiles($this->_cPtr,$dirName,$st);
	}

	function FindCert($certPart,$partValue,$cert) {
		return CkScMinidriver_FindCert($this->_cPtr,$certPart,$partValue,$cert);
	}

	function GenerateKey($containerIndex,$keySpec,$keyType,$keySize,$pinId) {
		return CkScMinidriver_GenerateKey($this->_cPtr,$containerIndex,$keySpec,$keyType,$keySize,$pinId);
	}

	function GetCardProperties($json) {
		return CkScMinidriver_GetCardProperties($this->_cPtr,$json);
	}

	function GetCert($containerIndex,$keySpec,$cert) {
		return CkScMinidriver_GetCert($this->_cPtr,$containerIndex,$keySpec,$cert);
	}

	function GetContainerKeys($containerIndex,$sigKey,$kexKey) {
		return CkScMinidriver_GetContainerKeys($this->_cPtr,$containerIndex,$sigKey,$kexKey);
	}

	function GetCspContainerMap($json) {
		return CkScMinidriver_GetCspContainerMap($this->_cPtr,$json);
	}

	function ImportCert($cert,$containerIndex,$keySpec,$pinId) {
		return CkScMinidriver_ImportCert($this->_cPtr,$cert,$containerIndex,$keySpec,$pinId);
	}

	function ImportKey($containerIndex,$keySpec,$privKey,$pinId) {
		return CkScMinidriver_ImportKey($this->_cPtr,$containerIndex,$keySpec,$privKey,$pinId);
	}

	function ListCerts($certPart,$st) {
		return CkScMinidriver_ListCerts($this->_cPtr,$certPart,$st);
	}

	function PinAuthenticate($pinId,$pin) {
		return CkScMinidriver_PinAuthenticate($this->_cPtr,$pinId,$pin);
	}

	function PinAuthenticateHex($pinId,$pin) {
		return CkScMinidriver_PinAuthenticateHex($this->_cPtr,$pinId,$pin);
	}

	function PinChange($pinId,$currentPin,$newPin) {
		return CkScMinidriver_PinChange($this->_cPtr,$pinId,$currentPin,$newPin);
	}

	function PinDeauthenticate($pinId) {
		return CkScMinidriver_PinDeauthenticate($this->_cPtr,$pinId);
	}

	function ReadFile($dirName,$fileName,$bd) {
		return CkScMinidriver_ReadFile($this->_cPtr,$dirName,$fileName,$bd);
	}

	function SaveLastError($path) {
		return CkScMinidriver_SaveLastError($this->_cPtr,$path);
	}

	function SignData($containerIndex,$keySpec,$hashDataAlg,$bdData,$bdSignedData) {
		return CkScMinidriver_SignData($this->_cPtr,$containerIndex,$keySpec,$hashDataAlg,$bdData,$bdSignedData);
	}

	function WriteFile($dirName,$fileName,$bd) {
		return CkScMinidriver_WriteFile($this->_cPtr,$dirName,$fileName,$bd);
	}
}