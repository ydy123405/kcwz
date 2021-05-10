//��������ɫ��غ���������
// ���»�ȡ����ɫcss��ʽ�ļ�
function reset_theme_1(color) {
	url = (window.location.href).replace(/#/g,"")
	if (!window.location.search||(window.location.href).indexOf("?")==-1) {
		//alert(url+"?c="+color)
		window.location.href=(url+"?c="+color)
	}
	else{
		//alert(url+"&c="+color)
		window.location.href=(url+"&c="+color)
	}
}

// ��ǰ����
color = ''
$.ajax({
	url: "php/normal.php",
	async: false,
	data: {data:"getcolor"},
	success: function(data){
		//console.log(data)
		color=data
	},
	error: function(data){
		//console.log(data)
	}
})

//console.log(color)
//banner��ǰindex
banner_index_now = 0

// ����Ϊ��ɫ
$("#theme_blue").click(function(){
	color="#0E4D9F";
	reset_theme_1("b");
	change_banner_by_index(banner_index_now,color)
})
// ����Ϊ��ɫ
$("#theme_red").click(function(){
	color="#CF0000";
	reset_theme_1("r");
	change_banner_by_index(banner_index_now,color)
})
// ����Ϊ��ɫ
$("#theme_green").click(function(){
	color="#36A285";
	reset_theme_1("g");
	change_banner_by_index(banner_index_now,color)
})

function change_banner_by_index(index, color) {
	//console.log(index)
	for (i=0;i<4;i++) {
		obj = "#banner_" + (i+1).toString()
		//console.log(obj)
		$(obj).css("background-color","#eeeeee")
	}
	focus = "#banner_" + (index+1).toString()
	//console.log(focus)
	$(focus).css("background-color",color)
}

// ���Ľ��ҵ���ɫ
$(".main-nav-pre").hover(function(){$(this).css({"background-color":color, "color":"#ffffff", "opacity":"0.8"})},function(){$(this).css({"background-color":"","color":"#333333"})})
$(".main-nav-pre").focus(function(){$(this).css({"background-color":color, "color":"#ffffff", "opacity":"0.8"});$(this).unbind('mouseenter mouseleave');})
$(".main-nav-pre").blur(function(){$(this).css({"background-color":"", "color":"#333333", "opacity":"0.8"})})
$("#main_nav_pre_active").hover(function(){$(this).css({"background-color":color, "color":"#ffffff", "opacity":"0.8"})},function(){$(this).css({"background-color":"","color":"#ffffff"})})
// $(".main-nav-pre").click(function(){$(this).attr("class","main-nav-preactive")})
$("#banner_carousel").carousel({
	interval: 2500 // in milliseconds
})
$("#banner_carousel").on('slide.bs.carousel', function (obj) {
	// ��ǰ�ֲ�����
	var index = $(this).find('.item').index(obj.relatedTarget);
	banner_index_now = index
	//console.log("����:" + index);
	change_banner_by_index(index, color)
 });

//������������
//�ı��ͷ����״̬
function qa_hide(q,a){
	q.attr("class","glyphicon glyphicon-triangle-bottom")
	a.hide()
}
function qa_show(q,a){
	q.attr("class","glyphicon glyphicon-triangle-top")
	a.show()
}

//����������
qa_hide($(".main-qa-q").children(),$(".main-qa-a"))
//��ʾ��һ�������
qa_show($(".main-qa-q:eq(0)").children(),$(".main-qa-a:eq(0)"))
$(".main-qa-q").click(function(){
	//��������
	qa_hide($(".main-qa-q").children(),$(".main-qa-a"))
	qa_q = $(this.childNodes[1])
	qa_a = $(this.parentNode.parentNode.childNodes[3].childNodes[1])
	// console.log(qa_q)
	// console.log(qa_a)
	if (qa_q.className=="glyphicon glyphicon-triangle-top") {
		qa_hide(qa_q, qa_a)
	} else {
		qa_show(qa_q, qa_a)
	}
})
