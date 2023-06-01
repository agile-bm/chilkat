<?php

namespace AgileBM\Chilkat;

class CkStringBuilder {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkStringBuilder') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkStringBuilder();
	}

	function get_Utf8() {
		return CkStringBuilder_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkStringBuilder_put_Utf8($this->_cPtr,$b);
	}

	function get_IntValue() {
		return CkStringBuilder_get_IntValue($this->_cPtr);
	}

	function put_IntValue($newVal) {
		CkStringBuilder_put_IntValue($this->_cPtr,$newVal);
	}

	function get_IsBase64() {
		return CkStringBuilder_get_IsBase64($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkStringBuilder_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkStringBuilder_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Length() {
		return CkStringBuilder_get_Length($this->_cPtr);
	}

	function Append($value) {
		return CkStringBuilder_Append($this->_cPtr,$value);
	}

	function AppendBd($binData,$charset,$offset,$numBytes) {
		return CkStringBuilder_AppendBd($this->_cPtr,$binData,$charset,$offset,$numBytes);
	}

	function AppendEncoded($binaryData,$encoding) {
		return CkStringBuilder_AppendEncoded($this->_cPtr,$binaryData,$encoding);
	}

	function AppendInt($value) {
		return CkStringBuilder_AppendInt($this->_cPtr,$value);
	}

	function AppendLine($value,$crlf) {
		return CkStringBuilder_AppendLine($this->_cPtr,$value,$crlf);
	}

	function AppendSb($sb) {
		return CkStringBuilder_AppendSb($this->_cPtr,$sb);
	}

	function Clear() {
		CkStringBuilder_Clear($this->_cPtr);
	}

	function Contains($str,$caseSensitive) {
		return CkStringBuilder_Contains($this->_cPtr,$str,$caseSensitive);
	}

	function ContainsWord($word,$caseSensitive) {
		return CkStringBuilder_ContainsWord($this->_cPtr,$word,$caseSensitive);
	}

	function ContentsEqual($str,$caseSensitive) {
		return CkStringBuilder_ContentsEqual($this->_cPtr,$str,$caseSensitive);
	}

	function ContentsEqualSb($sb,$caseSensitive) {
		return CkStringBuilder_ContentsEqualSb($this->_cPtr,$sb,$caseSensitive);
	}

	function Decode($encoding,$charset) {
		return CkStringBuilder_Decode($this->_cPtr,$encoding,$charset);
	}

	function DecodeAndAppend($value,$encoding,$charset) {
		return CkStringBuilder_DecodeAndAppend($this->_cPtr,$value,$encoding,$charset);
	}

	function Encode($encoding,$charset) {
		return CkStringBuilder_Encode($this->_cPtr,$encoding,$charset);
	}

	function EndsWith($substr,$caseSensitive) {
		return CkStringBuilder_EndsWith($this->_cPtr,$substr,$caseSensitive);
	}

	function EntityDecode() {
		return CkStringBuilder_EntityDecode($this->_cPtr);
	}

	function getAfterBetween($searchAfter,$beginMark,$endMark) {
		return CkStringBuilder_getAfterBetween($this->_cPtr,$searchAfter,$beginMark,$endMark);
	}

	function afterBetween($searchAfter,$beginMark,$endMark) {
		return CkStringBuilder_afterBetween($this->_cPtr,$searchAfter,$beginMark,$endMark);
	}

	function getAfterFinal($marker,$removeFlag) {
		return CkStringBuilder_getAfterFinal($this->_cPtr,$marker,$removeFlag);
	}

	function afterFinal($marker,$removeFlag) {
		return CkStringBuilder_afterFinal($this->_cPtr,$marker,$removeFlag);
	}

	function getAsString() {
		return CkStringBuilder_getAsString($this->_cPtr);
	}

	function asString() {
		return CkStringBuilder_asString($this->_cPtr);
	}

	function getBefore($marker,$removeFlag) {
		return CkStringBuilder_getBefore($this->_cPtr,$marker,$removeFlag);
	}

	function before($marker,$removeFlag) {
		return CkStringBuilder_before($this->_cPtr,$marker,$removeFlag);
	}

	function getBetween($beginMark,$endMark) {
		return CkStringBuilder_getBetween($this->_cPtr,$beginMark,$endMark);
	}

	function between($beginMark,$endMark) {
		return CkStringBuilder_between($this->_cPtr,$beginMark,$endMark);
	}

	function GetDecoded($encoding,$outBytes) {
		return CkStringBuilder_GetDecoded($this->_cPtr,$encoding,$outBytes);
	}

	function getEncoded($encoding,$charset) {
		return CkStringBuilder_getEncoded($this->_cPtr,$encoding,$charset);
	}

	function encoded($encoding,$charset) {
		return CkStringBuilder_encoded($this->_cPtr,$encoding,$charset);
	}

	function getHash($algorithm,$encoding,$charset) {
		return CkStringBuilder_getHash($this->_cPtr,$algorithm,$encoding,$charset);
	}

	function getNth($index,$delimiterChar,$exceptDoubleQuoted,$exceptEscaped) {
		return CkStringBuilder_getNth($this->_cPtr,$index,$delimiterChar,$exceptDoubleQuoted,$exceptEscaped);
	}

	function nth($index,$delimiterChar,$exceptDoubleQuoted,$exceptEscaped) {
		return CkStringBuilder_nth($this->_cPtr,$index,$delimiterChar,$exceptDoubleQuoted,$exceptEscaped);
	}

	function getRange($startIndex,$numChars,$removeFlag) {
		return CkStringBuilder_getRange($this->_cPtr,$startIndex,$numChars,$removeFlag);
	}

	function range($startIndex,$numChars,$removeFlag) {
		return CkStringBuilder_range($this->_cPtr,$startIndex,$numChars,$removeFlag);
	}

	function lastNLines($numLines,$bCrlf) {
		return CkStringBuilder_lastNLines($this->_cPtr,$numLines,$bCrlf);
	}

	function LoadFile($path,$charset) {
		return CkStringBuilder_LoadFile($this->_cPtr,$path,$charset);
	}

	function Obfuscate() {
		CkStringBuilder_Obfuscate($this->_cPtr);
	}

	function Prepend($value) {
		return CkStringBuilder_Prepend($this->_cPtr,$value);
	}

	function PunyDecode() {
		return CkStringBuilder_PunyDecode($this->_cPtr);
	}

	function PunyEncode() {
		return CkStringBuilder_PunyEncode($this->_cPtr);
	}

	function RemoveAfterFinal($marker) {
		return CkStringBuilder_RemoveAfterFinal($this->_cPtr,$marker);
	}

	function RemoveBefore($marker) {
		return CkStringBuilder_RemoveBefore($this->_cPtr,$marker);
	}

	function RemoveCharsAt($startIndex,$numChars) {
		return CkStringBuilder_RemoveCharsAt($this->_cPtr,$startIndex,$numChars);
	}

	function Replace($value,$replacement) {
		return CkStringBuilder_Replace($this->_cPtr,$value,$replacement);
	}

	function ReplaceAfterFinal($marker,$replacement) {
		return CkStringBuilder_ReplaceAfterFinal($this->_cPtr,$marker,$replacement);
	}

	function ReplaceAllBetween($beginMark,$endMark,$replacement,$replaceMarks) {
		return CkStringBuilder_ReplaceAllBetween($this->_cPtr,$beginMark,$endMark,$replacement,$replaceMarks);
	}

	function ReplaceBetween($beginMark,$endMark,$value,$replacement) {
		return CkStringBuilder_ReplaceBetween($this->_cPtr,$beginMark,$endMark,$value,$replacement);
	}

	function ReplaceFirst($value,$replacement) {
		return CkStringBuilder_ReplaceFirst($this->_cPtr,$value,$replacement);
	}

	function ReplaceI($value,$replacement) {
		return CkStringBuilder_ReplaceI($this->_cPtr,$value,$replacement);
	}

	function ReplaceNoCase($value,$replacement) {
		return CkStringBuilder_ReplaceNoCase($this->_cPtr,$value,$replacement);
	}

	function ReplaceWord($value,$replacement) {
		return CkStringBuilder_ReplaceWord($this->_cPtr,$value,$replacement);
	}

	function SecureClear() {
		CkStringBuilder_SecureClear($this->_cPtr);
	}

	function SetNth($index,$value,$delimiterChar,$exceptDoubleQuoted,$exceptEscaped) {
		return CkStringBuilder_SetNth($this->_cPtr,$index,$value,$delimiterChar,$exceptDoubleQuoted,$exceptEscaped);
	}

	function SetString($value) {
		return CkStringBuilder_SetString($this->_cPtr,$value);
	}

	function Shorten($numChars) {
		return CkStringBuilder_Shorten($this->_cPtr,$numChars);
	}

	function StartsWith($substr,$caseSensitive) {
		return CkStringBuilder_StartsWith($this->_cPtr,$substr,$caseSensitive);
	}

	function ToCRLF() {
		return CkStringBuilder_ToCRLF($this->_cPtr);
	}

	function ToLF() {
		return CkStringBuilder_ToLF($this->_cPtr);
	}

	function ToLowercase() {
		return CkStringBuilder_ToLowercase($this->_cPtr);
	}

	function ToUppercase() {
		return CkStringBuilder_ToUppercase($this->_cPtr);
	}

	function Trim() {
		return CkStringBuilder_Trim($this->_cPtr);
	}

	function TrimInsideSpaces() {
		return CkStringBuilder_TrimInsideSpaces($this->_cPtr);
	}

	function Unobfuscate() {
		CkStringBuilder_Unobfuscate($this->_cPtr);
	}

	function WriteFile($path,$charset,$emitBom) {
		return CkStringBuilder_WriteFile($this->_cPtr,$path,$charset,$emitBom);
	}

	function WriteFileIfModified($path,$charset,$emitBom) {
		return CkStringBuilder_WriteFileIfModified($this->_cPtr,$path,$charset,$emitBom);
	}
}