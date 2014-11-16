$(document).ready(function(){

var records = Array();
var n_records;

$.ajaxSetup({async:false});

function fetch()
{
		
	$.get("AngelList.php",function(data,status){
		records = JSON.parse(data); 
		n_records = records.length; 
	});

}
	
fetch();

for(var i = 0; i < n_records; i++){
	$("#users_list").append("<div class='user_container'></div>");
	$("#users_list").append("<div class='user_container_more'></div>");
}



for(var i = 0; i < n_records; i++){
var user = document.getElementsByClassName('user_container')[i];
var moreInfo = document.getElementsByClassName('user_container_more')[i];
var skillslen = (!records[i].Skills)?0:records[i].Skills.length;
var locationslen = (!records[i].Locations)?0:records[i].Locations.length;
var roleslen = (!records[i].Roles)?0:records[i].Roles.length;
$(user).append("<div class='userimage' style='background:url("+records[i].UserImage+" );background-repeat:no-repeat;background-position:center;background-size:100% 100%;'></div>"); 
	$(user).append("<h5><b>Name:</b>"+records[i].Name+"</h5>"); 
	$(user).append("<h5><b>Bio:</b>"+records[i].Bio+"</h5>"); 
	$(user).append("<h5><b>Followers:</b>"+records[i].Followers+"</h5>"); 
	$(user).append("<h5><b>AngelList_URL:</b>"+records[i].AngelList_URL+"</h5>"); 
	$(user).append("<h5><b>Blog_URL:</b>"+records[i].Blog_URL+"</h5>"); 
	$(user).append("<h5><b>Online_Bio_URL:</b> "+records[i].Online_Bio_URL+"</h5>");
	$(user).append("<h5><b>Twitter_URL:</b> "+records[i].Twitter_URL+"</h5>");
	$(user).append("<h5><b>Facebook_URL:</b> "+records[i].Facebook_URL+"</h5>");
	$(user).append("<h5><b>LinkedIn_URL:</b> "+records[i].LinkedIn_URL+"</h5>");
	$(user).append("<h5><b>AboutMe_URL:</b> "+records[i].AboutMe_URL+"</h5>");
	$(user).append("<h5><b>GitHub_URL:</b> "+records[i].GitHub_URL+"</h5>");
	$(user).append("<h5><b>Dribbble_URL:</b> "+records[i].Dribbble_URL+"</h5>");
	$(user).append("<h5><b>Behance_URL:</b> "+records[i].Behance_URL+"</h5>");
	$(user).append("<h5><b>Resume_URL:</b> "+records[i].Resume_URL+"</h5>");
	$(user).append("<div id='"+i+"' class='more'>more</div>");
	$(moreInfo).append("<h5><b>What I Have Built:</b> "+records[i].What_Ive_built+"</h5>");
	$(moreInfo).append("<h5><b>What I Do:</b> "+records[i].What_I_do+"</h5>");
	$(moreInfo).append("<h5><b>Criteria:</b> "+records[i].Criteria+"</h5>");
	$(moreInfo).append("<h5><b>Locations:</b></h5>");
	for(var j =0; j < locationslen; j++){
		$(moreInfo).append("<ul><li><h6><b>Where:</b> "+records[i].Locations[j].display_name+"</h6></li><ul>");
		$(moreInfo).append("<ul><h6><b>AngelList_URL:</b> "+records[i].Locations[j].angellist_url+"</h6><ul>");
	}
	$(moreInfo).append("<h5><b>Roles:</b></h5>");
	for(var j =0; j < roleslen; j++){
		$(moreInfo).append("<ul><li><h6><b>Role:</b> "+records[i].Roles[j].display_name+"</h6></li><ul>");
		$(moreInfo).append("<ul><h6><b>AngelList_URL:</b> "+records[i].Roles[j].angellist_url+"</h6><ul>");
	}
	$(moreInfo).append("<h5><b>Skills:</b></h5>");
	for(var j =0; j < skillslen; j++){
		$(moreInfo).append("<ul><li><h6><b>Name:</b> "+records[i].Skills[j].display_name+"</h6></li><ul>");
		$(moreInfo).append("<ul><h6><b>AngelList_URL:</b> "+records[i].Skills[j].angellist_url+"</h6><ul>");
	}

}


$('.more').click(function(){
	var id = $(this).attr('id');
	var getContainer = document.getElementsByClassName('user_container_more')[id];
	var display = $(getContainer).css("display");
 	if (display == "none"){
 		$(getContainer).css("display","block");
		$(this).text("hide");
	}
	else{
		$(getContainer).css("display","none");
		$(this).text("more");
	}
});

}); 