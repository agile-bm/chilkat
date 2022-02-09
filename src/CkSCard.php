<?php

namespace AgileBM\Chilkat;

class CkSCard {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkSCard') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkSCard();
	}

	function get_Utf8() {
		return CkSCard_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkSCard_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkSCard_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_ActiveProtocol($str) {
		CkSCard_get_ActiveProtocol($this->_cPtr,$str);
	}

	function activeProtocol() {
		return CkSCard_activeProtocol($this->_cPtr);
	}

	function get_CardAtr($str) {
		CkSCard_get_CardAtr($this->_cPtr,$str);
	}

	function cardAtr() {
		return CkSCard_cardAtr($this->_cPtr);
	}

	function get_ConnectedReader($str) {
		CkSCard_get_ConnectedReader($this->_cPtr,$str);
	}

	function connectedReader() {
		return CkSCard_connectedReader($this->_cPtr);
	}

	function get_Context($str) {
		CkSCard_get_Context($this->_cPtr,$str);
	}

	function context() {
		return CkSCard_context($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkSCard_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkSCard_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkSCard_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkSCard_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkSCard_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkSCard_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkSCard_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkSCard_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkSCard_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkSCard_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkSCard_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_PcscLibPath($str) {
		CkSCard_get_PcscLibPath($this->_cPtr,$str);
	}

	function pcscLibPath() {
		return CkSCard_pcscLibPath($this->_cPtr);
	}

	function put_PcscLibPath($newVal) {
		CkSCard_put_PcscLibPath($this->_cPtr,$newVal);
	}

	function get_ReaderStatus($str) {
		CkSCard_get_ReaderStatus($this->_cPtr,$str);
	}

	function readerStatus() {
		return CkSCard_readerStatus($this->_cPtr);
	}

	function get_ScardError($str) {
		CkSCard_get_ScardError($this->_cPtr,$str);
	}

	function scardError() {
		return CkSCard_scardError($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkSCard_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkSCard_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkSCard_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkSCard_version($this->_cPtr);
	}

	function BeginTransaction() {
		return CkSCard_BeginTransaction($this->_cPtr);
	}

	function CheckStatus() {
		return CkSCard_CheckStatus($this->_cPtr);
	}

	function Connect($reader,$shareMode,$preferredProtocol) {
		return CkSCard_Connect($this->_cPtr,$reader,$shareMode,$preferredProtocol);
	}

	function Disconnect($disposition) {
		return CkSCard_Disconnect($this->_cPtr,$disposition);
	}

	function EndTransaction($disposition) {
		return CkSCard_EndTransaction($this->_cPtr,$disposition);
	}

	function EstablishContext($scope) {
		return CkSCard_EstablishContext($this->_cPtr,$scope);
	}

	function FindSmartcards($json) {
		return CkSCard_FindSmartcards($this->_cPtr,$json);
	}

	function GetAttrib($attr,$bd) {
		return CkSCard_GetAttrib($this->_cPtr,$attr,$bd);
	}

	function getAttribStr($attr) {
		return CkSCard_getAttribStr($this->_cPtr,$attr);
	}

	function attribStr($attr) {
		return CkSCard_attribStr($this->_cPtr,$attr);
	}

	function GetAttribUint($attr) {
		return CkSCard_GetAttribUint($this->_cPtr,$attr);
	}

	function GetStatusChange($maxWaitMs,$stReaderNames,$json) {
		return CkSCard_GetStatusChange($this->_cPtr,$maxWaitMs,$stReaderNames,$json);
	}

	function GetStatusChangeAsync($maxWaitMs,$stReaderNames,$json) {
		$r=CkSCard_GetStatusChangeAsync($this->_cPtr,$maxWaitMs,$stReaderNames,$json);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetStatusChangeCancel() {
		return CkSCard_GetStatusChangeCancel($this->_cPtr);
	}

	function ListReaderGroups($readerGroups) {
		return CkSCard_ListReaderGroups($this->_cPtr,$readerGroups);
	}

	function ListReaders($st) {
		return CkSCard_ListReaders($this->_cPtr,$st);
	}

	function Reconnect($shareMode,$preferredProtocol,$action) {
		return CkSCard_Reconnect($this->_cPtr,$shareMode,$preferredProtocol,$action);
	}

	function ReleaseContext() {
		return CkSCard_ReleaseContext($this->_cPtr);
	}

	function SaveLastError($path) {
		return CkSCard_SaveLastError($this->_cPtr,$path);
	}

	function SendControl($controlCode,$bdSend,$bdRecv) {
		return CkSCard_SendControl($this->_cPtr,$controlCode,$bdSend,$bdRecv);
	}

	function SendControlHex($controlCode,$sendData,$bdRecv) {
		return CkSCard_SendControlHex($this->_cPtr,$controlCode,$sendData,$bdRecv);
	}

	function Transmit($protocol,$bdSend,$bdRecv,$maxRecvLen) {
		return CkSCard_Transmit($this->_cPtr,$protocol,$bdSend,$bdRecv,$maxRecvLen);
	}

	function TransmitHex($protocol,$apduHex,$bdRecv,$maxRecvLen) {
		return CkSCard_TransmitHex($this->_cPtr,$protocol,$apduHex,$bdRecv,$maxRecvLen);
	}
}