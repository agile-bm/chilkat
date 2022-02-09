<?php

namespace AgileBM\Chilkat;

class CkCertStore {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCertStore') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCertStore();
	}

	function get_Utf8() {
		return CkCertStore_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCertStore_put_Utf8($this->_cPtr,$b);
	}

	function get_AvoidWindowsPkAccess() {
		return CkCertStore_get_AvoidWindowsPkAccess($this->_cPtr);
	}

	function put_AvoidWindowsPkAccess($newVal) {
		CkCertStore_put_AvoidWindowsPkAccess($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkCertStore_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCertStore_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCertStore_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkCertStore_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCertStore_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCertStore_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCertStore_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCertStore_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCertStore_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkCertStore_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCertStore_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumCertificates() {
		return CkCertStore_get_NumCertificates($this->_cPtr);
	}

	function get_NumEmailCerts() {
		return CkCertStore_get_NumEmailCerts($this->_cPtr);
	}

	function get_SmartCardPin($str) {
		CkCertStore_get_SmartCardPin($this->_cPtr,$str);
	}

	function smartCardPin() {
		return CkCertStore_smartCardPin($this->_cPtr);
	}

	function put_SmartCardPin($newVal) {
		CkCertStore_put_SmartCardPin($this->_cPtr,$newVal);
	}

	function get_UncommonOptions($str) {
		CkCertStore_get_UncommonOptions($this->_cPtr,$str);
	}

	function uncommonOptions() {
		return CkCertStore_uncommonOptions($this->_cPtr);
	}

	function put_UncommonOptions($newVal) {
		CkCertStore_put_UncommonOptions($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkCertStore_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCertStore_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkCertStore_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCertStore_version($this->_cPtr);
	}

	function AddCertificate($cert) {
		return CkCertStore_AddCertificate($this->_cPtr,$cert);
	}

	function CreateFileStore($filename) {
		return CkCertStore_CreateFileStore($this->_cPtr,$filename);
	}

	function CreateMemoryStore() {
		return CkCertStore_CreateMemoryStore($this->_cPtr);
	}

	function CreateRegistryStore($regRoot,$regPath) {
		return CkCertStore_CreateRegistryStore($this->_cPtr,$regRoot,$regPath);
	}

	function FindCertByKeyContainer($name) {
		$r=CkCertStore_FindCertByKeyContainer($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertByRfc822Name($name) {
		$r=CkCertStore_FindCertByRfc822Name($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertBySerial($str) {
		$r=CkCertStore_FindCertBySerial($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertBySha1Thumbprint($str) {
		$r=CkCertStore_FindCertBySha1Thumbprint($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertBySubject($str) {
		$r=CkCertStore_FindCertBySubject($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertBySubjectCN($str) {
		$r=CkCertStore_FindCertBySubjectCN($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertBySubjectE($str) {
		$r=CkCertStore_FindCertBySubjectE($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertBySubjectO($str) {
		$r=CkCertStore_FindCertBySubjectO($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function FindCertForEmail($emailAddress) {
		$r=CkCertStore_FindCertForEmail($this->_cPtr,$emailAddress);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetCertificate($index) {
		$r=CkCertStore_GetCertificate($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetEmailCert($index) {
		$r=CkCertStore_GetEmailCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function LoadPemFile($pemPath) {
		return CkCertStore_LoadPemFile($this->_cPtr,$pemPath);
	}

	function LoadPemStr($pemString) {
		return CkCertStore_LoadPemStr($this->_cPtr,$pemString);
	}

	function LoadPfxData($pfxData,$password) {
		return CkCertStore_LoadPfxData($this->_cPtr,$pfxData,$password);
	}

	function LoadPfxFile($pfxFilename,$password) {
		return CkCertStore_LoadPfxFile($this->_cPtr,$pfxFilename,$password);
	}

	function OpenCurrentUserStore($readOnly) {
		return CkCertStore_OpenCurrentUserStore($this->_cPtr,$readOnly);
	}

	function OpenFileStore($filename,$readOnly) {
		return CkCertStore_OpenFileStore($this->_cPtr,$filename,$readOnly);
	}

	function OpenLocalSystemStore($readOnly) {
		return CkCertStore_OpenLocalSystemStore($this->_cPtr,$readOnly);
	}

	function OpenRegistryStore($regRoot,$regPath,$readOnly) {
		return CkCertStore_OpenRegistryStore($this->_cPtr,$regRoot,$regPath,$readOnly);
	}

	function OpenSmartcard($csp) {
		return CkCertStore_OpenSmartcard($this->_cPtr,$csp);
	}

	function OpenWindowsStore($storeLocation,$storeName,$readOnly) {
		return CkCertStore_OpenWindowsStore($this->_cPtr,$storeLocation,$storeName,$readOnly);
	}

	function RemoveCertificate($cert) {
		return CkCertStore_RemoveCertificate($this->_cPtr,$cert);
	}

	function SaveLastError($path) {
		return CkCertStore_SaveLastError($this->_cPtr,$path);
	}
}