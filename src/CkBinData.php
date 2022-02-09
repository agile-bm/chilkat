<?php

namespace AgileBM\Chilkat;

class CkBinData {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkBinData') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkBinData();
	}

	function get_Utf8() {
		return CkBinData_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkBinData_put_Utf8($this->_cPtr,$b);
	}

	function get_LastMethodSuccess() {
		return CkBinData_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkBinData_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumBytes() {
		return CkBinData_get_NumBytes($this->_cPtr);
	}

	function AppendBd($binData) {
		return CkBinData_AppendBd($this->_cPtr,$binData);
	}

	function AppendBinary($data) {
		return CkBinData_AppendBinary($this->_cPtr,$data);
	}

	function AppendBom($charset) {
		return CkBinData_AppendBom($this->_cPtr,$charset);
	}

	function AppendByte($byteValue) {
		return CkBinData_AppendByte($this->_cPtr,$byteValue);
	}

	function AppendEncoded($encData,$encoding) {
		return CkBinData_AppendEncoded($this->_cPtr,$encData,$encoding);
	}

	function AppendEncodedSb($sb,$encoding) {
		return CkBinData_AppendEncodedSb($this->_cPtr,$sb,$encoding);
	}

	function AppendInt2($value,$littleEndian) {
		return CkBinData_AppendInt2($this->_cPtr,$value,$littleEndian);
	}

	function AppendInt4($value,$littleEndian) {
		return CkBinData_AppendInt4($this->_cPtr,$value,$littleEndian);
	}

	function AppendPadded($str,$charset,$padWithSpace,$fieldLen) {
		return CkBinData_AppendPadded($this->_cPtr,$str,$charset,$padWithSpace,$fieldLen);
	}

	function AppendSb($sb,$charset) {
		return CkBinData_AppendSb($this->_cPtr,$sb,$charset);
	}

	function AppendString($str,$charset) {
		return CkBinData_AppendString($this->_cPtr,$str,$charset);
	}

	function Clear() {
		return CkBinData_Clear($this->_cPtr);
	}

	function ContentsEqual($binData) {
		return CkBinData_ContentsEqual($this->_cPtr,$binData);
	}

	function FindString($str,$startIdx,$charset) {
		return CkBinData_FindString($this->_cPtr,$str,$startIdx,$charset);
	}

	function GetBinary($outBytes) {
		return CkBinData_GetBinary($this->_cPtr,$outBytes);
	}

	function GetBinaryChunk($offset,$numBytes,$outBytes) {
		return CkBinData_GetBinaryChunk($this->_cPtr,$offset,$numBytes,$outBytes);
	}

	function GetBytesPtr() {
		return CkBinData_GetBytesPtr($this->_cPtr);
	}

	function getEncoded($encoding) {
		return CkBinData_getEncoded($this->_cPtr,$encoding);
	}

	function encoded($encoding) {
		return CkBinData_encoded($this->_cPtr,$encoding);
	}

	function getEncodedChunk($offset,$numBytes,$encoding) {
		return CkBinData_getEncodedChunk($this->_cPtr,$offset,$numBytes,$encoding);
	}

	function encodedChunk($offset,$numBytes,$encoding) {
		return CkBinData_encodedChunk($this->_cPtr,$offset,$numBytes,$encoding);
	}

	function GetEncodedSb($encoding,$sb) {
		return CkBinData_GetEncodedSb($this->_cPtr,$encoding,$sb);
	}

	function GetInt2($index,$littleEndian) {
		return CkBinData_GetInt2($this->_cPtr,$index,$littleEndian);
	}

	function GetInt4($index,$littleEndian) {
		return CkBinData_GetInt4($this->_cPtr,$index,$littleEndian);
	}

	function getString($charset) {
		return CkBinData_getString($this->_cPtr,$charset);
	}

	function string($charset) {
		return CkBinData_string($this->_cPtr,$charset);
	}

	function getTextChunk($startIdx,$numBytes,$charset) {
		return CkBinData_getTextChunk($this->_cPtr,$startIdx,$numBytes,$charset);
	}

	function textChunk($startIdx,$numBytes,$charset) {
		return CkBinData_textChunk($this->_cPtr,$startIdx,$numBytes,$charset);
	}

	function GetUInt2($index,$littleEndian) {
		return CkBinData_GetUInt2($this->_cPtr,$index,$littleEndian);
	}

	function GetUInt4($index,$littleEndian) {
		return CkBinData_GetUInt4($this->_cPtr,$index,$littleEndian);
	}

	function LoadBinary($data) {
		return CkBinData_LoadBinary($this->_cPtr,$data);
	}

	function LoadEncoded($encData,$encoding) {
		return CkBinData_LoadEncoded($this->_cPtr,$encData,$encoding);
	}

	function LoadFile($path) {
		return CkBinData_LoadFile($this->_cPtr,$path);
	}

	function RemoveChunk($offset,$numBytes) {
		return CkBinData_RemoveChunk($this->_cPtr,$offset,$numBytes);
	}

	function SecureClear() {
		return CkBinData_SecureClear($this->_cPtr);
	}

	function WriteFile($path) {
		return CkBinData_WriteFile($this->_cPtr,$path);
	}
}