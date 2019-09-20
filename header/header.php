<nav class="header">
    <a href="" id="logo">My green city</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="#ctn_action">Actions</a></li>
        <li><a href="#ctn_association">Associations</a></li>
        <li><a href="#ctn_dechet">Déchets</a></li>
        <li><a href="#ctn_contact">Contact</a></li>
    </ul>
</nav>

<div class="carrousel">
    <div>
        <img id="coverImage" src="../action/images/feuille.png" alt="" />
    </div>
    <a class="prev" onclick="previousSlide()">&#10094;</a>
    <a class="next" onclick="nextSlide()">&#10095;</a>
</div>
<div class="containerDots">
    <span class="dot" onclick="showSlide(0)"></span>
    <span class="dot" onclick="showSlide(1)"></span>
    <span class="dot" onclick="showSlide(2)"></span>
</div>