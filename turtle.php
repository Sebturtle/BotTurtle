 <?php
$url = 'https://discordapp.com/api/webhooks/517375919329902597/UzlwAgqZ-vvVP7xjBCwZ5pCsQqzxxvE3n7aNX43L_PlZRHgDT501Bg2fb7jVk_yVyCco/github'; // Adresse de votre webhook
$data = array(
  'content' => "Bonjour tous le monde c'est TurtleBOT",   // Contenu du message, peut être formaté en Markdown
                     // Seuls les emojis de Discord fonctionnent
                     // Limité à 2000 caractères
  'username' => 'TurtleBOT', // Remplacer le nom du webhook, à enlever si inutilisé
  'embeds' => array(
    array(
      'title' => 'L'odre du renouveau', // Intitulé du lien
      'description' => 'L'ordre du renouveau fait ses premiers pas dans un monde vaste', // Texte affiché après le titre
      // Image, Miniature, Auteur et Footer son optionnels
      /*
       * Ajouter une image
       */
      'image' => array(
        'url' => '', // (jaune) Adresse de l'image
        'width' => 0, // Largeur de l'image
        'height' => 0 // Hauteur de l'image
      ),
      /*
       * Ajouter une miniature
       */
      'thumbnail' => array(
        'url' => 'https://discordapp.com/api/webhooks/517375919329902597/UzlwAgqZ-vvVP7xjBCwZ5pCsQqzxxvE3n7aNX43L_PlZRHgDT501Bg2fb7jVk_yVyCco/github', // (vert) Adresse de l'image
        'width' => 0, // Largeur de l'image
        'height' => 0 // Hauteur de l'image
      ),
      /*
       * Ajouter un auteur
       */
      'author' => array(
        'name' => 'Turtle', // Nom de l'auteur
       
      ),
      /*
       * Ajouter une mention en pied de page
       */
      'footer' => array(
        'text' => 'Gloire a un Monde nouveau', // Texte à afficher
        'icon_url' => 'bleu' // (bleu clair) URL de l'image
      )
    )
  ),
);
