
# hoge = require './hoge'


class main

	constructor: (opt) ->
		@opt = $.extend true, 
			headerElm: null,
			dropdownHeaderElm: null
		, opt || {}

		# 起動処理を実行する。
		@init()

		# イベント登録
		$(@opt.dropdownHeaderElm).on 'click', (e) => @switchDropdownMenu(e.currentTarget)

		$(window).on 'scroll', (e) => @fixedHeader()

	init: () ->
		# ヘッダーの高さを取得する。
		@headerHeight = $(@opt.headerElm).innerHeight()


	# ドロップダウンメニューの表示を切り替える。
	switchDropdownMenu: (el) ->
		$(el).next('.menu').toggleClass 'open'

	# ヘッダーを固定する。
	fixedHeader: () ->
		currentOffset = $(window).scrollTop()
		if currentOffset > 50
			$(@opt.headerElm).addClass 'fixed'
		else
			$(@opt.headerElm).removeClass 'fixed'

window.main = window.main || main