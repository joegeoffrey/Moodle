YUI.add("moodle-tool_editrolesbycap-capabilityformfield",function(e,t){var n=function(){n.superclass.constructor.apply(this,arguments)};e.extend(n,e.Base,{initializer:function(){}},{NAME:"capabilityformfield",ATTRS:{}}),M.tool_editrolesbycap=M.tool_editrolesbycap||{},M.tool_editrolesbycap.init_capabilityformfield=function(t){this.select=e.one(t);if(!this.select)return;var r=this.get_filter_cookie();return this.div=e.Node.create('<div class="capabilitysearchui"></div>').setStyles({width:this.select.get("offsetWidth"),marginLeft:"auto",marginRight:"auto"}),this.input=e.Node.create('<input type="text" id="'+this.select.get("id")+'capabilitysearch" value="'+r+'" />'),this.label=e.Node.create('<label for="'+this.input.get("id")+'">'+M.str.moodle.filter+" </label>"),this.button=e.Node.create('<input type="button" value="'+M.str.moodle.clear+'" />').set("disabled",r===""),this.div.append(this.label).append(this.input).append(this.button),this.select.ancestor().append(this.div),this.nonemessage=e.Node.create('<optgroup label="'+M.str.tool_editrolesbycap.nonematch+'"></optgroup>'),this.select.append(this.nonemessage),this.set_visible(this.nonemessage,!1),this.input.on("keyup",this.change,this),this.button.on("click",this.clear,this),r!==""&&this.filter(),new n({})},M.tool_editrolesbycap.set_filter_cookie=function(t){var n={flttime:(new Date).getTime(),fltvalue:t};e.Cookie.setSubs("captblflt",n)},M.tool_editrolesbycap.get_filter_cookie=function(){var t=e.Cookie.getSubs("captblflt");return t!==null&&parseInt(t.flttime,10)>(new Date).getTime()-36e5?t.fltvalue:""},M.tool_editrolesbycap.clear=function(){this.input.set("value",""),this.delayhandle!==-1&&(clearTimeout(this.delayhandle),this.delayhandle=-1),this.filter()},M.tool_editrolesbycap.change=function(){var e=this,t=setTimeout(function(){e.filter()},this.searchdelay);this.delayhandle!==-1&&clearTimeout(this.delayhandle),this.delayhandle=t},M.tool_editrolesbycap.set_visible=function(t,n){!e.one("body.ie")&&!e.one("body.safari")?n?t.setStyle("display","block"):t.setStyle("display","none"):n?t.get("parentNode").test("span")&&t.unwrap():t.get("parentNode").test("span")||t.wrap('<span style="display: none;"/>')},M.tool_editrolesbycap.filter=function(){var e=this.input.get("value").toLowerCase();this.set_filter_cookie(e),this.button.set("disabled",e==="");var t=!0;this.select.all("optgroup").each(function(n){this.set_visible(n,!1),lastgroup=n,n.all("option").each(function(n){var r=n.get("text").toLowerCase();r.indexOf(e)>=0?(this.set_visible(lastgroup,!0),this.set_visible(n,!0),t=!1):this.set_visible(n,!1)},this)},this),t&&this.set_visible(this.nonemessage,!0)}},"@VERSION@",{requires:["base","dom","event","cookie"]});
