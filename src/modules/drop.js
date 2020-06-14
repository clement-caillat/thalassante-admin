var dropmenu = new Vue({
    el: "#content",
    data: {
        shownotifications: false,
        showuser: false,
        notification: true
    },
    methods: {
        togglenotifs: function(){
            this.shownotifications = this.shownotifications != true;
            this.notification = false;
            this.showuser = false;
        },
        toggleuser: function(){
            this.showuser = this.showuser != true;
            this.shownotifications = false;
        }
    }
})

$(document).click(function(e){
    if(e.target.id != "userdropbutton" && e.target.id != "userdrop"){
        dropmenu.showuser = false;
    }
    if(e.target.id != "notifdropbutton" && e.target.id != "notifications"){
        dropmenu.shownotifications = false;
    }
})