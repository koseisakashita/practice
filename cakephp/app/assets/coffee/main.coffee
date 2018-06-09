
hoge = require './hoge'

window.main = window.main || {}

class main

	constructor: (opt) ->
		@opt = opt || {}
		@hoge = new hoge()

	init: () ->
		@hoge.echo @opt

window.main = main