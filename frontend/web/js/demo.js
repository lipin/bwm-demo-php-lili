$(document).ready(function(){
    $("#prize li").each(function(){
        var p = $(this);
        var c = $(this).attr('class');
        p.css("background-color",c);
        p.click(function(){
            $("#prize li").unbind('click');
            $.ajax({
                type:'POST',
                url:"/draw/start",
                dataType:'json',
                cache:false,
                error: function(){
                    alert('出错了！');
                    return false;
                },
                success:function(json){
                    var prize = json.yes;
                    // console.log(prize);
                    p.flip({
                        direction:'rl',
                        content:prize,
                        color:c,
                        onEnd: function(){
                            p.css({"font-size":"22px","line-height":"100px"});
                            p.attr("id","r");
                            $("#viewother").show();
                            $("#prize li").unbind('click').css("cursor","default").removeAttr("title");
                        }
                    });
                    $("#data").data("nolist",json.no);
                }
            });
        });
    });
    $("#viewother").click(function(){
        var mydata = $("#data").data("nolist"); //获取数据
        console.log(mydata);
        var mydata2 = eval(mydata);
        $("#prize li").not($('#r')[0]).each(function(index){
            var pr = $(this);
            pr.flip({
                direction:'bt',
                color:'lightgrey',
                content:mydata2[index],
                onEnd:function(){
                    pr.css({"font-size":"22px","line-height":"100px","color":"#333"});
                    $("#viewother").hide();
                    $("#repeat").show();
                }
            });
        });
        $("#data").removeData("nolist");
    });
    $("#repeat").click(function(){
        window.location.reload();
    });
});