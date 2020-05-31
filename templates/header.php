
<header>
    <div id="logo">
        <img src="templates/images/logo.png" alt="Logo de Thalassanté">
        <div class="titles">
            <h1>Thalassanté</h1>
            <p>Admin Panel</p>
        </div>
    </div>
    <div id="content">
        <div id="user-options">
            <div class="icon">
                <i class="far fa-bell" :class="{ fas: shownotifications }" @Click="togglenotifs()"></i>
                <span v-if="notifications"></span>
                <div class="dropdown" id="notifications" v-if="shownotifications">

                </div>
            </div>
            <div class="user">
                <img src="templates/images/avatars/avatar.jpg" alt="Profile picture">
            </div>
        </div>
    </div>
</header>