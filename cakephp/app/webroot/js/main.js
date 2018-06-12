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

	// hoge = require './hoge'
	var main;

	main = class main {
	  constructor(opt) {
	    this.opt = $.extend(true, {
	      headerElm: null,
	      dropdownHeaderElm: null
	    }, opt || {});
	    // 起動処理を実行する。
	    this.init();
	    // イベント登録
	    $(this.opt.dropdownHeaderElm).on('click', (e) => {
	      return this.switchDropdownMenu(e.currentTarget);
	    });
	    $(window).on('scroll', (e) => {
	      return this.fixedHeader();
	    });
	  }

	  init() {
	    // ヘッダーの高さを取得する。
	    return this.headerHeight = $(this.opt.headerElm).innerHeight();
	  }

	  // ドロップダウンメニューの表示を切り替える。
	  switchDropdownMenu(el) {
	    return $(el).next('.menu').toggleClass('open');
	  }

	  // ヘッダーを固定する。
	  fixedHeader() {
	    var currentOffset;
	    currentOffset = $(window).scrollTop();
	    if (currentOffset > 50) {
	      return $(this.opt.headerElm).addClass('fixed');
	    } else {
	      return $(this.opt.headerElm).removeClass('fixed');
	    }
	  }

	};

	window.main = window.main || main;


/***/ })
/******/ ]);