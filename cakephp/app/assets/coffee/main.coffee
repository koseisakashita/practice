
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

		# ヘッダーを固定する。
		@fixedHeader()

	# ドロップダウンメニューの表示を切り替える。
	switchDropdownMenu: (el) ->
		$(el).next('.menu').toggleClass 'open'

	# ヘッダーを固定する。
	fixedHeader: () ->
		currentOffset = $(window).scrollTop()
		if currentOffset > @headerHeight
			$(@opt.headerElm).addClass 'fixed'
			$('.main-container').addClass 'fixed-margin'
		else
			$(@opt.headerElm).removeClass 'fixed'
			$('.main-container').removeClass 'fixed-margin'

window.main = window.main || main