<section id="programme" class="section programme"
         data-action="display"
         data-name="sectionProgramme">

	<h1 class="deskOnly">Programme</h1>
	<p class="mobileOnly programme__date">Jeudi 17 Janvier</p>

  <!-- Programme tables par tables -->
  <section class="programme__tables-wrap"
           data-action="display"
           data-name="programmeTables">
    <button class="programme__tables-retour"
           data-action="trigger"
           data-type="main"
           data-parent="programmeTables">❮ retour</button>
    <h2 class="programme__tables-titre">Programme table par table</h2>
    <div>
      <img class="programme__tables-load" src="images/loading.gif" width="100%"/>
    </div>
  </section>

  <!-- Programme général -->
	<div class="programme__event" id="accueil"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
			<h3 class="programme__event-titre">Accueil et café</h3>
      <span class="programme__event-date">8h30</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Nous vous accueillons autour d’un café pour bien commencer la journée
			</p>
		</aside>
  </div>

  <div class="programme__event" id="presentation_dut"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Présentation de notre formation</h3>
      <span class="programme__event-date">9h</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">Qu’est-ce que MMI et quels sont nos objectifs ?</p>
		</aside>
  </div>

  <div class="programme__event" id="stage_dating"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Stage-dating</h3>
      <span class="programme__event-date">9h30</span>
			<b class="programme__event-plus"></b>
		</div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Mise en place de petits entretiens entre professionnel et étudiant
        <button class="programme__event-description--tables"
                data-action="trigger"
                data-type="main"
                data-name="programmeTables">Programme table par table ❯</button>
			</p>
			<a href="https://docs.google.com/forms/d/e/1FAIpQLScU8itcWbHU5MdUf5DPczL4y9Q4K7LdoSS4L-tC7vf_0__TqA/viewform" class="mobileOnly bouton bouton--blanc">Inscription</a>
		</aside>
  </div>

  <div class="programme__event" id="anciens"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Anciens étudiants</h3>
      <span class="programme__event-date">9h30</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				En parallèle des entretiens, venez écouter d'anciens étudiants parler de leur parcours.
			</p>
		</aside>
  </div>

  <div class="programme__event" id="buffet"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Repas / Buffet</h3>
      <span class="programme__event-date">12h - 13h</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Pause pour reprendre des forces, c’est le moment pour échanger et rencontrer d’autres entreprises/étudiants
			</p>
		</aside>
  </div>

  <div class="programme__event" id="tables_rondes"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Tables rondes</h3>
      <span class="programme__event-date">13h30-15h</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Conférence donnée par Olivier Berni et Thomas Jaussoin (<b><a href="https://www.lunabee.studio/">Lunabee Studio</a></b>) sur le thème “User Onboarding in mobile apps” (“Intégration des utilisateurs dans les applications mobiles”).
			</p>
		</aside>
  </div>

</section>
