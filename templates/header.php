
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
                <i id="notifdropbutton" class="far fa-bell" :class="{ fas: shownotifications }" @Click="togglenotifs()"></i>
                <span v-show="notification"></span>
                <div class="dropdown" id="notifications" v-show="shownotifications">

                </div>
            </div>
            <div class="user">
                <img id="userdropbutton" src="templates/images/avatars/avatar.jpg" alt="Profile picture" @Click="toggleuser()">
                <div class="dropdown" id="userdrop" v-show="showuser">
                    <ul>
                        <li>
                            <a href="">
                                <div class="icon">
                                    <i class="fas fa-user-cog"></i>
                                </div>
                                <div class="text">
                                    Mon compte
                                </div>
                            </a>
                        </li>
                        <li class="red">
                            <a href="?d">
                                <div class="icon">
                                    <i class="fas fa-power-off" style="color: red;"></i>
                                </div>
                                <div class="text">
                                    Déconnexion
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<script src="src/modules/drop.js"></script>