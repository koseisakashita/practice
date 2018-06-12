
hoge = require './hoge'


class main

	constructor: (opt) ->
		@opt = $.extend true, 
			headerElm: null
		, opt || {}

		# イベント登録
		$(@opt.headerElm).on 'click', (e) => @switchDropdownMenu()

	init: () ->
		hoge.echo @opt

	# ドロップダウンメニューの表示を切り替える。
	switchDropdownMenu: () ->
		$(@opt.headerElm).next('ul').toggleClass 'open'

window.main = window.main || main