<?php

namespace AgileBM\Chilkat;

class CkMailManProgress extends CkBaseProgress {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr,$value);
		CkBaseProgress::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
		return CkBaseProgress::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return CkBaseProgress::__isset($var);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_CkMailManProgress') {
			$this->_cPtr=$res;
			return;
		}
		if (get_class($this) === 'CkMailManProgress') {
			$_this = null;
		} else {
			$_this = $this;
		}
		$this->_cPtr=new_CkMailManProgress($_this);
	}

	function EmailReceived($subject,$fromAddr,$fromName,$returnPath,$date,$uidl,$sizeInBytes) {
		CkMailManProgress_EmailReceived($this->_cPtr,$subject,$fromAddr,$fromName,$returnPath,$date,$uidl,$sizeInBytes);
	}
}