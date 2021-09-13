
// +++++++++++++++++++++++++++++++++++++
// +++++          FOOTER           +++++
// +++++++++++++++++++++++++++++++++++++
function Footer() { // permet de gerer le footer une seule fois pour toutes les pages
    document.getElementById("Footer").innerHTML =
    '<footer>'
        +'<div class="contenu-footer">'
            +'<div class="bloc footer-services">'
                +'<h3>Nos Services</h3>'
                +'<ul class="liste-services">'
                    +'<li><a href="../index.html">Acceuil</a></li>'
                    +'<li><a href="Connexion.html">Connection</a></li>'
                    +'<li><a href="recherchePatho.html">Recherche Pathologies</a></li>'
                    +'<li><a href="Contact.html">A propos</a></li>'
                +'</ul>'
            +'</div>'
            +'<div class="bloc footer-contact">'
                +'<h3>Restons en contact</h3>'
                +'<p>4 IRC 2020-2023</p>'
            +'</div>'
        +'</div>'
    +'</footer>';
}