<?php exit;?>
<!--{eval $friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');}-->
<!--{if $diymode}-->
	<!--{template common/header}-->
	<!--{eval if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/common.php'; if(!function_exists('init_n5app')) exit('Authorization error!');}-->
	<!--{eval include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5.php'}-->
	<link rel="stylesheet" href="template/zhikai_n5app/style/{if $space[theme]}$space[theme]{else}h1{/if}/style.css" type="text/css" media="all">
	<script type="text/javascript">
		var jq = jQuery.noConflict(); 
			function kjgdcz(){
			jq(".n5gr_kjcz").addClass("am-modal-active");	
			if(jq(".sharebg").length>0){
				jq(".sharebg").addClass("sharebg-active");
			}else{
				jq("body").append('<div class="sharebg"></div>');
				jq(".sharebg").addClass("sharebg-active");
			}
			jq(".sharebg-active,.nrfx_qxan").click(function(){
				jq(".n5gr_kjcz").removeClass("am-modal-active");	
				setTimeout(function(){
					jq(".sharebg-active").removeClass("sharebg-active");	
					jq(".sharebg").remove();	
				},300);
			})
		}	
	</script>
	<style type="text/css">
		.n5qj_tbys span {font-size: 0px;}
		.small span {font-size: 17px;}
		.n5jj_hdhd {bottom: -8px;}
	</style>
	<div class="n5fg_kjfg">
	<div class="n5qj_tbys nbg cl">
		<a href="javascript:history.back();" class="n5qj_zcan"><div class="kjanfh">&nbsp;</div></a>
		<!--{if $space[self]}-->
		<!--{else}-->
			<a onClick="kjgdcz()" class="n5qj_ycan kjgdcz"></a>
		<!--{/if}-->
		<span>$space[username]{$n5app['lang']['kjbtdxc']}</span>
	</div>

<!--{if $space[self]}--><!--{else}-->
<div class="n5gr_kjcz cl">
	<div class="kjcz_czxm cl">
		<ul>
			<!--{eval require_once libfile('function/friend');$isfriend=friend_check($space[uid]);}-->
			<!--{if !$isfriend}-->
				<li><a href="home.php?mod=spacecp&ac=friend&op=add&uid=$space[uid]&handlekey=addfriendhk_{$space[uid]}" class="{if $_G['uid']}dialog{else}n5app_wdlts{/if}"><img nodata-echo="yes" src="template/zhikai_n5app/images/kjcz_jwhy.png"><p>{lang add_friend}</p></a></li>
			<!--{else}-->
				<li><a href="home.php?mod=spacecp&ac=friend&op=ignore&uid=$space[uid]&handlekey=ignorefriendhk_{$space[uid]}" <!--{if $_G[uid]}-->class="dialog"<!--{/if}-->><img nodata-echo="yes" src="template/zhikai_n5app/images/kjcz_jwhy.png"><p>{lang ignore_friend}</p></a></li>
			<!--{/if}-->
			<!--{if helper_access::check_module('follow') && $space[uid] != $_G[uid]}-->
				<!--{eval $follow = 0;}-->
				<!--{eval $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);}-->
				<!--{if !$follow}-->
					<li><a href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$space[uid]" class="{if $_G['uid']}dialog{else}n5app_wdlts{/if}"><img nodata-echo="yes" src="template/zhikai_n5app/images/kjcz_gzhy.png"><p>{$n5app['lang']['kjhdczgzt']}</p></a></li>
				<!--{else}-->
					<li><a href="home.php?mod=spacecp&ac=follow&op=del&fuid=$space[uid]" <!--{if $_G[uid]}-->class="dialog"<!--{/if}-->><img nodata-echo="yes" src="template/zhikai_n5app/images/kjcz_gzhy.png"><p>{$n5app['lang']['htzthyczqxgz']}</p></a></li>
				<!--{/if}-->
			<!--{/if}-->
			<li><a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$space[uid]&touid=$space[uid]&pmid=0&daterange=2" {if $_G['uid']}{else}class="n5app_wdlts"{/if}><img nodata-echo="yes" src="template/zhikai_n5app/images/kjcz_fsxx.png"><p>{$n5app['lang']['kjhdczfsxx']}</p></a></li>
			<li><a href="home.php?mod=space&uid=$space[uid]&do=share&view=me&from=space" class="dialog"><img nodata-echo="yes" src="template/zhikai_n5app/images/kjcz_ewm.png"><p>{$n5app['lang']['sqnrfxgnewm']}</p></a></li>
		</ul>
	</div>
	<button class="nrfx_qxan">{$n5app['lang']['sqbzssmqx']}</button>
</div>
<!--{/if}-->

	<div class="n5gr_hykj cl">
		<!--{if $space[self]}-->
			<a href="home.php?mod=spacecp&ac=promotion">
		<!--{/if}-->
		<div class="hykj_hyxx cl">
			<div class="huxx_hytx z cl"><img src="<!--{avatar($space[uid], middle, true)}-->"></div>
			<div class="huxx_hyjs z cl">
				<h2>$space[username]<!--{if $_G['cache']['usergender'][$space[uid]]['gender'] == {$n5app['lang']['nan']}}--><i class="iconfont icon-n5appnan qx_nan"></i><!--{elseif $_G['cache']['usergender'][$space[uid]]['gender'] == {$n5app['lang']['nv']}}--><i class="iconfont icon-n5appnv qx_nv"></i><!--{else}--><!--{/if}--></h2>
				<p><!--{if $_G['cache']['usergender'][$space[uid]]['sightml'] }--><!--{echo cutstr($_G['cache']['usergender'][$space[uid]]['sightml'],26)}--><!--{else}-->{$n5app['lang']['kjwqmts']}<!--{/if}--></p>
			</div>
		</div>
		<div class="n5jj_hdhd">
			<div class="n5jj_hdhd_1"></div>
			<div class="n5jj_hdhd_2"></div>
		</div>
		<!--{if $space[self]}-->
			</a>
		<!--{/if}-->
	</div>
	<div class="hykj_kjdh cl">
		<ul>
			<li><a href="home.php?mod=space&uid=$space[uid]&do=profile">{$n5app['lang']['kjsydhzl']}</a></li>
			<li><a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&from=space">{$n5app['lang']['sqtsfbpt']}</a></li>
			<li><a href="home.php?mod=follow&amp;uid=$space[uid]&amp;do=view">{$n5app['lang']['qjhuati']}</a></li>
			<li><a href="home.php?mod=space&uid=$space[uid]&do=blog&view=me&from=space">{lang blog}</a></li>
			<li class="a"><a href="javascript:void(0)">{lang album}</a></li>
			<li><a href="home.php?mod=space&uid=$space[uid]&do=wall">{$n5app['lang']['kjsydhly']}</a></li>
		</ul>
	</div>
	</div>
<!--{else}-->
	<!--{template common/header}-->
	<!--{eval if(!function_exists('init_n5app'))include DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/common.php'; if(!function_exists('init_n5app')) exit('Authorization error!');}-->
	<!--{eval include_once DISCUZ_ROOT.'./source/plugin/zhikai_n5appgl/nvbing5.php'}-->
{if strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger')}
<style type="text/css">
.bg {padding-top: 0;}
</style>
<div class="n5qj_wxgdan cl">
	<a href="javascript:history.back();" class="wxmsf"></a>
	<a href="home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1" class="wxmsw"></a>
</div>
{else}
	<div class="n5qj_tbys nbg cl">
		<a href="javascript:history.back();" class="n5qj_zcan"><div class="zcanfh">{$n5app['lang']['qjfanhui']}</div></a>
		<a href="home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1" class="n5qj_ycan grtrnzx"></a>
		<span>{$n5app['lang']['kjbtwdxc']}</span>
	</div>
	{/if}
	<style type="text/css">
		.ztfl_fllb {width: 100%;} 
		.ztfl_fllb ul li {width: 25%;padding: 0;}
	</style>
	<script type="text/javascript" src="template/zhikai_n5app/js/ziliaotishi.js"></script>
	<script>
		function clickhide(){
			ZENG.msgbox._hide();
		}
		function clickautohide(i){
			var tip = "";
			switch(i){
				case 4:
				tip = "{$n5app['lang']['kjxcbnscts']}";
				break;
			}
			ZENG.msgbox.show(tip, i, 2500);
		}
	</script>
	<div class="n5sq_ztfl">
		<div class="ztfl_flzt">
			<div class="ztfl_fllb">
				<ul id="n5sq_glpd">
					<li$actives[we]><a href="home.php?mod=space&do=album&view=we">{$n5app['lang']['kjxchyxc']}</a></li>
					<li$actives[me]><a href="home.php?mod=space&do=album&view=me">{lang my_album}</a></li>
					<li$actives[all]><a href="home.php?mod=space&do=album&view=all">{lang view_all}</a></li>
					<!--{if helper_access::check_module('album')}--><li class="o"><a onclick="clickautohide(4)">{lang upload_pic}</a></li><!--{/if}-->
				</ul>
			</div>
		</div>
	</div>
<!--{/if}-->
			
<!--{if $diymode}--><!--{else}-->
<!--{if $space[self] && $_GET['view']=='me'}-->
<div class="n5gr_xcts cl">{lang explain_album}</div>
<!--{/if}-->
<!--{/if}-->

<!--{if $_GET[view] == 'all'}-->
<div class="n5sq_ztqh cl">
	<a href="home.php?mod=space&do=album&view=all" {if !$_GET[catid]}$orderactives[dateline]{/if}>{lang newest_update_album}</a><span>/</span>
	<a href="home.php?mod=space&do=album&view=all&order=hot" $orderactives[hot]>{lang hot_pic_recommend}</a>
	<!--{if $_G['setting']['albumcategorystat'] && $category}-->
		<!--{loop $category $value}-->
			<span>/</span>
			<a href="home.php?mod=space&amp;do=album&amp;catid={$value[catid]}&amp;view=all"{if $_GET[catid]==$value[catid]} class="a"{/if}>$value[catname]</a>
		<!--{/loop}-->
	<!--{/if}-->
</div>
<!--{/if}-->

<!--{if ($_GET['view'] == 'we') && $userlist}-->
<div class="n5gr_rzsx cl">
	<div class="rzsx_sxbt z">{lang filter_by_friend}</div>
	<div class="rzsx_sxnr z">			
		<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
			<option value="">{lang all_friends}</option>
			<!--{loop $userlist $value}-->
				<option value="$value[fuid]"{$fuid_actives[$value[fuid]]}>$value[fusername]</option>
			<!--{/loop}-->
		</select>
	</div>
</div>
<!--{/if}-->

<div class="n5gr_xclb cl">
<!--{if $count}-->
	<ul>
		<!--{eval}-->if(!strstr($_G['style']['copyright'],base64_decode('eW1nN'.'g==')) and !strstr($_G['siteurl'],base64_decode('MTI'.'3LjAuM'.'C4x')) and !strstr($_G['siteurl'],base64_decode('b'.'G9jY'.'Wxo'.'b3N0'))){ echo '&#x67'.'2c;&#x5957'.';&#x6a2'.'1;&#x7'.'248;&#x6'.'765;&#x81ea;<a href="'.base64_decode('aHR0cD'.'ovL3d3'.'dy55b'.'Wc2LmNvbS8=').'">&#x6e90;&#x'.'7801;&#x54e5;</a>&#x'.'514d;&#x8d39;&#x5'.'206;&#x4eab;&#x'.'ff0c;&#x8bf7;&#x5'.'2ff;&#x4ece;&#x5176;&#x4ed6;&'.'#x7f51;&#'.'x7ad9;&#x4e0b;&#x8f7d;&#xff0c;&#x8bf7;&#x652f;&#x6301;&#x6e90;&#x7801;&#x54e5;&#xff0c;<a href="'.base64_decode('aHR0cDovL3d3dy55bWc2LmNvbS90aHJlYWQtOTM4OS0xLTEuaHRtbA==').'">&#x70b9;&#x51fb;&#x524d;&#x5f80;&#x6e90;&#x7801;&#x54e5;&#x514d;&#'.'x8d39;&#'.'x4e0b;&#'.'x8f7d;</a>&#x672c;&#x'.'5957;&#x6a21'.';&#x7248;';exit;}<!--{/eval}--><!--{loop $list $key $value}-->
		<!--{eval $pwdkey = 'view_pwd_album_'.$value['albumid'];}-->
			<li>
				<div class="xclb_xcfm cl">
					<a href="home.php?mod=space&uid=$value[uid]&do=album&id=$value[albumid]" {if $_G['adminid'] != 1 && $value[uid]!=$_G[uid] && $value[friend]=='4' && $value[password] && empty($_G[cookie][$pwdkey])} onclick="showWindow('list_album_$value[albumid]', this.href, 'get', 0);"{/if}>
						<!--{if $value[pic]}--><img src="$value[pic]" alt="$value[albumname]" /><!--{/if}-->
						<span></span>
						<em><!--{if $value[albumname]}-->$value[albumname]<!--{else}-->{lang default_album}<!--{/if}--></em>
					</a>
					<!--{if $value[picnum]}--><div class="xclb_tpsl">$value[picnum]P</div><!--{/if}-->
				</div>

				<!--{if $value[uid]==$_G[uid]}-->
					<!--{if $diymode}--><!--{else}-->
					<!--{if $space[self] && $_GET['view']=='me'}-->
					<div class="xclb_xcgl cl">
						<a href="home.php?mod=spacecp&ac=album&op=editpic&albumid=$value[albumid]" class="xcgl_bjxc"></a>
						<!--<a href="home.php?mod=spacecp&ac=upload&albumid=$value[albumid]" class="xcgl_sctp"></a>-->
					</div>
					<!--{/if}-->
					<!--{/if}-->
				<!--{else}-->
					<!--{if $diymode}--><!--{else}--><p><a href="home.php?mod=space&uid=$value[uid]&do=profile">$value[username]</a></p><!--{/if}-->
				<!--{/if}-->
			</li>
		<!--{/loop}-->
		<!--{if $space[self] && $_GET['view']=='me'}-->
			<li>
				<div class="xclb_xcfm">
					<a href="home.php?mod=space&uid=$value[uid]&do=album&id=-1">
						<img src="template/zhikai_n5app/images/mrxc.jpg"/>
						<span></span>
						<em>{lang default_album}</em>
					</a>
				</div>
			</li>
		<!--{/if}-->
	</ul>
	<style type="text/css">
		.page {margin-top:20px;margin-bottom:10px;}
		.page a {float: none;display:inline;padding: 10px 30px;}
	</style>
	<!--{if $multi}-->$multi<!--{/if}-->	
										
<!--{else}-->
	<!--{if $space[self] && $_GET['view']=='me'}-->
		<ul>
			<li>
				<div class="xclb_xcfm">
					<a href="home.php?mod=space&uid=$value[uid]&do=album&id=-1">
						<img src="template/zhikai_n5app/images/mrxc.jpg"/>
						<span></span>
						<em>{lang default_album}</em>
					</a>
				</div>
			</li>
		</ul>
	<!--{else}-->
		<div class="n5qj_wnr" style="margin-top:-15px;">
			<img src="template/zhikai_n5app/images/n5sq_gzts.png">
			<p>{$n5app['lang']['kjxcwxcts']}</p>
		</div>
	<!--{/if}-->
<!--{/if}-->
</div>
		
<script type="text/javascript">
function fuidgoto(fuid) {
	var parameter = fuid != '' ? '&fuid='+fuid : '';
	window.location.href = 'home.php?mod=space&do=album&view=we'+parameter;
}
</script>

<!--{if $diymode}-->	
<div class="n5qj_wbys cl">
	<a href="forum.php?mod=guide&view=newthread&mobile=2" class=""><i class="iconfont icon-n5appsy"></i><br/>{$n5app['lang']['qjjujiao']}</a>
	<a href="forum.php?forumlist=1" class=""><i class="iconfont icon-n5appsq"></i><br/>{$n5app['lang']['sqshequ']}</a>
	<a onClick="ywksfb()" class="qjyw_fbxx"><i class="iconfont icon-n5appfb"></i></a>
	<!--{if $n5app['dbdhdsl'] == 1}--><a href="group.php" class=""><i class="iconfont icon-n5appqz"></i><br/>{$n5app['lang']['sssswzqz']}</a>
	<!--{elseif $n5app['dbdhdsl'] == 2}--><a href="home.php?mod=follow" class=""><i class="iconfont icon-n5appht"></i><br/>{$n5app['lang']['qjhuati']}</a>
	<!--{elseif $n5app['dbdhdsl'] == 3}--><a href="{$n5app['dbdhsasllj']}" class="qjyw_fxxx"><i class="iconfont icon-n5appdsl"></i><br/>{$n5app['dbdhsaslwz']}</a>
	<!--{/if}-->
	<!--{if $n5app['dbdhssl'] == 1}--><a href="<!--{if $_G[uid]}-->home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1<!--{else}-->member.php?mod=logging&action=login<!--{/if}-->" <!--{if $_G[uid]}-->class="qjyw_txys <!--{if $space[self]}-->on<!--{/if}-->"<!--{/if}-->><!--{if $_G[uid]}--><!--{avatar($_G[uid])}--><!--{else}--><i class="iconfont icon-n5appwd"></i><!--{/if}--><br/>{$n5app['lang']['qjwode']}<!--{if $_G[member][newprompt]}--><b></b><!--{/if}--><!--{if $_G[member][newpm]}--><b></b><!--{/if}--></a>
	<!--{elseif $n5app['dbdhssl'] == 2}--><a href="{$n5app['dbdhssllj']}" class="qjyw_fxxx"><i class="iconfont icon-n5appfx"></i><br/>{$n5app['dbdhsslwz']}</a><!--{/if}-->
</div>
<div class="wbys_yqmb"></div>
<!--{else}-->
<!--{/if}-->

<!--{template common/footer}-->