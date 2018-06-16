/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

	'use strict';

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	// hoge = require './hoge'
	var main;

	main = function () {
	  function main(opt) {
	    var _this = this;

	    _classCallCheck(this, main);

	    this.opt = $.extend(true, {
	      headerElm: null,
	      dropdownHeaderElm: null
	    }, opt || {});
	    // 起動処理を実行する。
	    this.init();
	    // イベント登録
	    $(this.opt.dropdownHeaderElm).on('click', function (e) {
	      return _this.switchDropdownMenu(e.currentTarget);
	    });
	    $(window).on('scroll', function (e) {
	      return _this.fixedHeader();
	    });
	  }

	  _createClass(main, [{
	    key: 'init',
	    value: function init() {
	      // ヘッダーの高さを取得する。
	      this.headerHeight = $(this.opt.headerElm).innerHeight();
	      // ヘッダーを固定する。
	      return this.fixedHeader();
	    }

	    // ドロップダウンメニューの表示を切り替える。

	  }, {
	    key: 'switchDropdownMenu',
	    value: function switchDropdownMenu(el) {
	      return $(el).next('.menu').toggleClass('open');
	    }

	    // ヘッダーを固定する。

	  }, {
	    key: 'fixedHeader',
	    value: function fixedHeader() {
	      var currentOffset;
	      currentOffset = $(window).scrollTop();
	      if (currentOffset > this.headerHeight) {
	        $(this.opt.headerElm).addClass('fixed');
	        return $('.main-container').addClass('fixed-margin');
	      } else {
	        $(this.opt.headerElm).removeClass('fixed');
	        return $('.main-container').removeClass('fixed-margin');
	      }
	    }
	  }]);

	  return main;
	}();

	window.main = window.main || main;

/***/ })
/******/ ]);