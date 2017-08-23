DROP TABLE IF EXISTS sentence_classes;
DROP TABLE IF EXISTS sentence_partials;

CREATE TABLE sentence_classes (
  id VARCHAR(255),
  next VARCHAR(255)
);

CREATE TABLE sentence_partials (
  id INT,
  value TEXT,
  class VARCHAR(255)
);

INSERT INTO sentence_classes (id, next) VALUES
("LieuMas", "AdjMas"),
("AdjMas", "QuaMas"),
("QuaMas", "NomMas")
;

INSERT INTO sentence_partials (value, class) VALUES
("Ecueil", "LieuMas"),
("Bourg", "LieuMas"),
("Castel", "LieuMas"),
("Champ", "LieuMas"),
("Château", "LieuMas"),
("Fond", "LieuMas"),
("Mont", "LieuMas"),
("Moulin", "LieuMas"),
("Pont", "LieuMas"),
("Port", "LieuMas"),
("Pré", "LieuMas"),
("Pic", "LieuMas"),
("Puy", "LieuMas"),
("Roc", "LieuMas"),
("Rocher", "LieuMas"),
("Tertre", "LieuMas"),
("Val", "LieuMas"),
("Valon", "LieuMas"),
("Lac", "LieuMas"),
("Bois", "LieuMas"),
("Bord", "LieuMas"),
("Cerf", "LieuMas"),
("Croc", "LieuMas"),
("Comble", "LieuMas"),

("Roche", "LieuFem"),
("Ville", "LieuFem"),
("Eau", "LieuFem"),
("Vigne", "LieuFem"),
("Terre", "LieuFem"),
("Forge", "LieuFem"),
("Maison", "LieuFem"),
("Mer", "LieuFem"),
("Rive", "LieuFem"),
("Roche", "LieuFem"),
("Ronce", "LieuFem"),
("Cime", "LieuFem"),
("Herbe", "LieuFem"),
("Citadelle", "LieuFem"),
("Passerelle", "LieuFem"),
("Butte", "LieuFem"),
("Colline", "LieuFem"),
("Brume", "LieuFem"),
("Cour", "LieuFem"),
("Douve", "LieuFem"),
("Dune", "LieuFem"),
("Fosse", "LieuFem"),
("Grange", "LieuFem"),
("Muraille", "LieuFem"),
("Plaine", "LieuFem"),
("Tour", "LieuFem"),
("Valée", "LieuFem"),

("vif", "AdjMas"),
("rude", "AdjMas"),
("vert", "AdjMas"),
("vieu", "AdjMas"),
("bas", "AdjMas"),
("beau", "AdjMas"),
("blanc", "AdjMas"),
("clair", "AdjMas"),
("fier", "AdjMas"),
("franc", "AdjMas"),
("froid", "AdjMas"),
("grand", "AdjMas"),
("haut", "AdjMas"),
("morne", "AdjMas"),
("mort", "AdjMas"),
("noble", "AdjMas"),
("noir", "AdjMas"),
("fou", "AdjMas"),
("court", "AdjMas"),
("-sur-mine", "AdjMas"),
("-sur-lac", "AdjMas"),
(" du tonnerre", "AdjMas"),
("-à-brume", "AdjMas"),
("-à-embrum", "AdjMas"),
("-à-fer", "AdjMas"),
("-à-loup", "AdjMas"),
("-à-pluie", "AdjMas"),
("brave", "AdjMas"),
("calme", "AdjMas"),
("courbe", "AdjMas"),
("-de-fer", "AdjMas"),
("-de-feu", "AdjMas"),
("-de-mine", "AdjMas"),
("-de-père", "AdjMas"),
("-de-pluie", "AdjMas"),
("-de-suif", "AdjMas"),
("doré", "AdjMas"),
("droit", "AdjMas"),
("dur", "AdjMas"),
("-en-bois", "AdjMas"),
("-en-croc", "AdjMas"),
("-en-embrum", "AdjMas"),
("-en-fer", "AdjMas"),
("-en-feu", "AdjMas"),
("-en-ours", "AdjMas"),
("-en-père", "AdjMas"),
("-en-suif", "AdjMas"),
("fer", "AdjMas"),
("long", "AdjMas"),
("neuf", "AdjMas"),
("-sous-cerf", "AdjMas"),
("-sous-croc", "AdjMas"),
("-sous-écume", "AdjMas"),
("-sous-lin", "AdjMas"),
("-sous-loup", "AdjMas"),
("-sous-puit", "AdjMas"),
("-sous-suif", "AdjMas"),
("-sous-bois", "AdjMas"),
("-sous-embrum", "AdjMas"),
("-sous-laine", "AdjMas"),
("-sous-pluie", "AdjMas"),
("-sous-tourbe", "AdjMas"),
("-sur-suif", "AdjMas"),
("-sur-puit", "AdjMas"),
("-sur-loup", "AdjMas"),
("-sur-bois", "AdjMas"),
("-sur-cerf", "AdjMas"),
("-sur-croc", "AdjMas"),
("-sur-écume", "AdjMas"),
("-sur-embrum", "AdjMas"),
("-sur-lin", "AdjMas"),
("-sur-laine", "AdjMas"),
("-sur-pluie", "AdjMas"),
("-sur-tourbe", "AdjMas"),
("royal", "AdjMas"),

("vive", "AdjFem"),
("rude", "AdjFem"),
("verte", "AdjFem"),
("vieille", "AdjFem"),
("basse", "AdjFem"),
("belle", "AdjFem"),
("blanche", "AdjFem"),
("claire", "AdjFem"),
("fière", "AdjFem"),
("franche", "AdjFem"),
("froide", "AdjFem"),
("grande", "AdjFem"),
("haute", "AdjFem"),
("morne", "AdjFem"),
("mort", "AdjFem"),
("noble", "AdjFem"),
("noire", "AdjFem"),
("folle", "AdjFem"),
("courte", "AdjFem"),
("-sur-mine", "AdjFem"),
("-sur-lac", "AdjFem"),
(" du tonnerre", "AdjFem"),
("-à-brume", "AdjFem"),
("-à-embrum", "AdjFem"),
("-à-fer", "AdjFem"),
("-à-loup", "AdjFem"),
("-à-pluie", "AdjFem"),
("brave", "AdjFem"),
("calme", "AdjFem"),
("courbe", "AdjFem"),
("-de-fer", "AdjFem"),
("-de-feu", "AdjFem"),
("-de-mine", "AdjFem"),
("-de-père", "AdjFem"),
("-de-pluie", "AdjFem"),
("-de-suif", "AdjFem"),
("dorée", "AdjFem"),
("droite", "AdjFem"),
("dure", "AdjFem"),
("-en-bois", "AdjFem"),
("-en-croc", "AdjFem"),
("-en-embrum", "AdjFem"),
("-en-fer", "AdjFem"),
("-en-feu", "AdjFem"),
("-en-ours", "AdjFem"),
("-en-père", "AdjFem"),
("-en-suif", "AdjFem"),
("fer", "AdjFem"),
("longue", "AdjFem"),
("neuve", "AdjFem"),
("-sous-cerf", "AdjFem"),
("-sous-croc", "AdjFem"),
("-sous-écume", "AdjFem"),
("-sous-lin", "AdjFem"),
("-sous-loup", "AdjFem"),
("-sous-puit", "AdjFem"),
("-sous-suif", "AdjFem"),
("-sous-bois", "AdjFem"),
("-sous-embrum", "AdjFem"),
("-sous-laine", "AdjFem"),
("-sous-pluie", "AdjFem"),
("-sous-tourbe", "AdjFem"),
("-sur-suif", "AdjFem"),
("-sur-puit", "AdjFem"),
("-sur-loup", "AdjFem"),
("-sur-bois", "AdjFem"),
("-sur-cerf", "AdjFem"),
("-sur-croc", "AdjFem"),
("-sur-écume", "AdjFem"),
("-sur-embrum", "AdjFem"),
("-sur-lin", "AdjFem"),
("-sur-laine", "AdjFem"),
("-sur-pluie", "AdjFem"),
("-sur-tourbe", "AdjFem"),
("royale", "AdjFem"),

("Vif", "QuaMas"),
("Rude", "QuaMas"),
("Vert", "QuaMas"),
("Vieu", "QuaMas"),
("Bas", "QuaMas"),
("Beau", "QuaMas"),
("Blanc", "QuaMas"),
("Clair", "QuaMas"),
("Fier", "QuaMas"),
("Franc", "QuaMas"),
("Froid", "QuaMas"),
("Grand", "QuaMas"),
("Haut", "QuaMas"),
("Morne", "QuaMas"),
("Mort", "QuaMas"),
("Noble", "QuaMas"),
("Noir", "QuaMas"),
("Fou", "QuaMas"),
("Court", "QuaMas"),
("Brave", "QuaMas"),
("Calme", "QuaMas"),
("Courbe", "QuaMas"),

("Vive", "QuaFem"),
("Rude", "QuaFem"),
("Verte", "QuaFem"),
("Vieille", "QuaFem"),
("Basse", "QuaFem"),
("Belle", "QuaFem"),
("Blanche", "QuaFem"),
("Claire", "QuaFem"),
("Fière", "QuaFem"),
("Franche", "QuaFem"),
("Froide", "QuaFem"),
("Grande", "QuaFem"),
("Haute", "QuaFem"),
("Morne", "QuaFem"),
("Mort", "QuaFem"),
("Noble", "QuaFem"),
("Noire", "QuaFem"),
("Folle", "QuaFem"),
("Courte", "QuaFem"),
("Calme", "QuaFem"),
("Courbe", "QuaFem"),
("Droite", "QuaFem"),
("Dure", "QuaFem"),

("ecueil", "NomMas"),
("bourg", "NomMas"),
("castel", "NomMas"),
("champ", "NomMas"),
("château", "NomMas"),
("fond", "NomMas"),
("mont", "NomMas"),
("moulin", "NomMas"),
("pont", "NomMas"),
("port", "NomMas"),
("pré", "NomMas"),
("pic", "NomMas"),
("puy", "NomMas"),
("roc", "NomMas"),
("rocher", "NomMas"),
("tertre", "NomMas"),
("val", "NomMas"),
("valon", "NomMas"),
("lac", "NomMas"),
("bois", "NomMas"),
("bord", "NomMas"),
("cerf", "NomMas"),
("croc", "NomMas"),
("comble", "NomMas"),
("mur", "NomMas"),

("roche", "NomFem"),
("ville", "NomFem"),
("eau", "NomFem"),
("vigne", "NomFem"),
("terre", "NomFem"),
("forge", "NomFem"),
("maison", "NomFem"),
("mer", "NomFem"),
("rive", "NomFem"),
("roche", "NomFem"),
("ronce", "NomFem"),
("cime", "NomFem"),
("herbe", "NomFem"),
("citadelle", "NomFem"),
("passerelle", "NomFem"),
("butte", "NomFem"),
("colline", "NomFem"),
("brume", "NomFem"),
("cour", "NomFem"),
("douve", "NomFem"),
("dune", "NomFem"),
("fosse", "NomFem"),
("grange", "NomFem"),
("muraille", "NomFem"),
("plaine", "NomFem"),
("tour", "NomFem"),
("valée", "NomFem"),

("belette", "CreFemCon"),
("loutre", "CreFemCon"),
("marmotte", "CreFemCon"),
("mésange", "CreFemCon"),
("mouche", "CreFemCon"),
("mouette", "CreFemCon"),
("pieuvre", "CreFemCon"),
("wyverne", "CreFemCon"),
("grenouille", "CreFemCon"),
("marmotte", "CreFemCon"),

("anguille", "CreFemVoy"),
("hydre", "CreFemVoy"),
("araignée", "CreFemVoy"),
("abeille", "CreFemVoy"),

("rieuse", "AdjFemCre"),
("animmée", "AdjFemCre"),
("jaune", "AdjFemCre"),
("cuivrée", "AdjFemCre"),
("braisée", "AdjFemCre"),
("farcie", "AdjFemCre"),
("verte", "AdjFemCre"),
("malade", "AdjFemCre"),
("noire", "AdjFemCre"),
("fringante", "AdjFemCre"),
("malchanceuse", "AdjFemCre"),
("gourmande", "AdjFemCre"),
("fumée", "AdjFemCre"),
("crevée", "AdjFemCre"),
("enragée", "AdjFemCre"),
("rieuse", "AdjFemCre"),

("bougie", "ObjFemCon"),
("oreille", "ObjFemCon"),
("bouteille", "ObjFemCon"),
("chopine", "ObjFemCon"),
("couronne", "ObjFemCon"),
("cuillére", "ObjFemCon"),
("plume", "ObjFemCon"),
("poélle", "ObjFemCon"),
("table", "ObjFemCon"),
("chope", "ObjFemCon"),
("fleur", "ObjFemCon"),
("fléte", "ObjFemCon"),
("fourchette", "ObjFemCon"),
("barbe", "ObjFemCon"),
("lance", "ObjFemCon"),

("rouge", "AdjFemObj"),
("brélante", "AdjFemObj"),
("hurlante", "AdjFemObj"),
("percée", "AdjFemObj"),
("brisée", "AdjFemObj"),
("dorée", "AdjFemObj"),
("sale", "AdjFemObj"),
("noircie", "AdjFemObj"),
("fondue", "AdjFemObj"),

("chat", "CreMasCon"),
("chien", "CreMasCon"),
("griffon", "CreMasCon"),
("cochon", "CreMasCon"),
("dauphin", "CreMasCon"),
("dragon", "CreMasCon"),
("faucon", "CreMasCon"),
("gobelin", "CreMasCon"),
("héron", "CreMasCon"),
("mouton", "CreMasCon"),
("poisson", "CreMasCon"),
("poney", "CreMasCon"),
("renard", "CreMasCon"),
("sanglier", "CreMasCon"),
("troll", "CreMasCon"),
("blaireau", "CreMasCon"),
("chat", "CreMasCon"),
("forgeron", "CreMasCon"),
("poney", "CreMasCon"),
("poulet", "CreMasCon"),
("corbeau", "CreMasCon"),
("crapaud", "CreMasCon"),
("cochon", "CreMasCon"),
("cafard", "CreMasCon"),
("faucon", "CreMasCon"),
("hérisson", "CreMasCon"),
("héron", "CreMasCon"),
("sanglier", "CreMasCon"),
("troll", "CreMasCon"),
("dragon", "CreMasCon"),

("aigle", "CreMasVoy"),
("ours", "CreMasVoy"),

("blanc", "AdjMasCre"),
("jaune", "AdjMasCre"),
("fumé", "AdjMasCre"),
("rieur", "AdjMasCre"),
("sympathique", "AdjMasCre"),
("noir", "AdjMasCre"),
("enragé", "AdjMasCre"),
("malicieux", "AdjMasCre"),
("bleu", "AdjMasCre"),
("malchanceux", "AdjMasCre"),
("copieux", "AdjMasCre"),
("hurlant", "AdjMasCre"),
("sentimental", "AdjMasCre"),
("braisé", "AdjMasCre"),
("brulé", "AdjMasCre"),
("magique", "AdjMasCre"),
("fringant", "AdjMasCre"),
("insatiable", "AdjMasCre"),
("fraceur", "AdjMasCre"),
("chantant", "AdjMasCre"),

("luth", "ObjMasCon"),
("chaudron", "ObjMasCon"),
("comptoir", "ObjMasCon"),
("tonneau", "ObjMasCon"),
("bouclier", "ObjMasCon"),
("chaudron", "ObjMasCon"),
("chiffon", "ObjMasCon"),
("coin", "ObjMasCon"),
("glaive", "ObjMasCon"),

("rouge", "AdjMasObj"),
("brélant", "AdjMasObj"),
("hurlant", "AdjMasObj"),
("percé", "AdjMasObj"),
("brisé", "AdjMasObj"),
("doré", "AdjMasObj"),
("sale", "AdjMasObj"),
("noirci", "AdjMasObj"),
("fondu", "AdjMasObj"),
("vert", "AdjMasObj"),
("bleu", "AdjMasObj"),
("élimé", "AdjMasObj"),
("fondu", "AdjMasObj"),
("fendu", "AdjMasObj"),
("doré", "AdjMasObj"),

("cinq", "QuaNum"),
("deux", "QuaNum"),
("trois", "QuaNum"),
("quatre", "QuaNum"),
("cinq", "QuaNum"),
("six", "QuaNum"),
("cent", "QuaNum"),
("mille", "QuaNum"),

("Mahyar", "Perso"),
("Minst", "Perso"),
("Mirra", "Perso"),
("Avygael", "Perso"),
("Taklin", "Perso"),
("Rudolf", "Perso"),
("Argawen", "Perso"),
("Hadush", "Perso"),
("Ash", "Perso"),
("Pam", "Perso"),
("Rick Tapdur", "Perso"),
("Eris", "Perso"),
("Saumeth", "Perso"),
("Latur", "Perso"),
("Grecarsos", "Perso"),
("Trados", "Perso"),
("Burtath", "Perso"),
("Gigollel", "Perso"),
("Kolecan", "Perso"),
("Lodersan", "Perso"),
("Lacesor", "Perso"),
("Pamilion", "Perso"),
("Ascis", "Perso"),
("Etal", "Perso"),
("Druveth", "Perso"),
("Poncebrar", "Perso"),
("Bomis", "Perso"),
("Proris", "Perso"),
("Piscur", "Perso"),
("Kodien", "Perso"),
("Mecegrus", "Perso"),
("Jimican", "Perso"),
("Drae", "Perso"),
("Gige", "Perso"),
("Remithath", "Perso"),
("Pedus", "Perso"),
("Gisin", "Perso"),
("Siscel", "Perso"),
("Calin", "Perso"),
("Bertas", "Perso"),
("Baran", "Perso"),

("brasserie", "LieFemCon"),
("cabane", "LieFemCon"),
("hutte", "LieFemCon"),
("maison", "LieFemCon"),
("table", "LieFemCon"),
("taverne", "LieFemCon"),

("foyer", "LieMasCon"),
("géte", "LieMasCon"),
("bar", "LieMasCon"),
("bol", "LieMasCon"),
("chaudron", "LieMasCon"),
("chéne", "LieMasCon"),
("coin", "LieMasCon"),
("comptoire", "LieMasCon"),
("gobelet", "LieMasCon"),
("relais", "LieMasCon"),
("repaire", "LieMasCon"),
("tonneau", "LieMasCon"),
("mouchoir", "LieMasCon"),
("comptoir", "LieMasCon"),

("fume", "QuiNeu"),
("grogne", "QuiNeu"),
("grogne", "QuiNeu"),
("rote", "QuiNeu"),
("craque", "QuiNeu"),
("louche", "QuiNeu"),

("troll", "du"),
("rodeur", "du"),
("mage", "du"),
("sorcier", "du"),
("nain", "du"),
("voisin", "du"),
("voyageur", "du"),
("marcheur", "du"),
("coureur de jupons", "du"),
("grand-pére", "du"),
("vaillant", "du"),
("pélerin", "du"),
("pirate", "du"),

("or", "d"),
("argent", "d"),
("adamantium", "d"),

("quatres chemins", "des"),
("légendes", "des"),
("réves", "des"),
("plaisirs", "des"),
("quais", "des"),
("chansons", "des"),
("portes", "des"),
("caravanes", "des"),
("rencontres", "des"),
("pélerins", "des"),
("deux tours", "des"),
("petites personnes", "des"),
("halfelins", "des"),
("gobelins", "des"),

("longue barbe", "dela"),
("courtisane", "dela"),
("voisine", "dela"),
("petite personne", "dela"),

("Une fontaine", "lieu"),
("Un parc", "lieu"),
("Un lac", "lieu"),
("Une statue", "lieu"),
("Un édifice commémoratif", "lieu"),
("Un pont", "lieu"),
("Une tour abandonée", "lieu"),
("Un jardin", "lieu"),
("Un bosquet", "lieu"),
("Une place", "lieu"),
("Une maison biscornue", "lieu"),
("Une maison étrange", "lieu"),

("Agate rubanée", "gemmetype1"),
("Agate iris", "gemmetype1"),
("Agate de feu", "gemmetype1"),
("Agate-mousse", "gemmetype1"),
("Agate oeil de tigre", "gemmetype1"),
("Azurite", "gemmetype1"),
("Couronne d'argent", "gemmetype1"),
("Fluorite", "gemmetype1"),
("Hématite", "gemmetype1"),
("Ivoire", "gemmetype1"),
("Lapis-Lazuli", "gemmetype1"),
("Malachite", "gemmetype1"),
("Nelvine", "gemmetype1"),
("Néphrite", "gemmetype1"),
("Obsidienne", "gemmetype1"),
("Perle (irrégulère)", "gemmetype1"),
("Quartz bleu", "gemmetype1"),
("Quartz laiteux", "gemmetype1"),
("Rhodochronsite", "gemmetype1"),
("sanidine", "gemmetype1"),
("Turquoise", "gemmetype1"),
("Violine", "gemmetype1"),

("Andar", "gemmetype2"),
("Aventurine", "gemmetype2"),
("Calcédoine", "gemmetype2"),
("Chrysoprase", "gemmetype2"),
("Citrine", "gemmetype2"),
("Cornaline", "gemmetype2"),
("Héliotrope", "gemmetype2"),
("Hydrophane", "gemmetype2"),
("Iole", "gemmetype2"),
("Iolite", "gemmetype2"),
("Irtios", "gemmetype2"),
("Jaspe", "gemmetype2"),
("Onyx", "gemmetype2"),
("Orprase", "gemmetype2"),
("Péridot", "gemmetype2"),
("Phénalope", "gemmetype2"),
("Pierre de lune", "gemmetype2"),
("Quartz cristal de roche", "gemmetype2"),
("Quartz rose", "gemmetype2"),
("Quartz fumé", "gemmetype2"),
("Sardoine", "gemmetype2"),
("Sardonyx", "gemmetype2"),
("Spoduméne", "gemmetype2"),
("Tchazar", "gemmetype2"),
("Zircon", "gemmetype2"),

("Ambre", "gemmetype3"),
("Améthyste", "gemmetype3"),
("Chrysobéryl", "gemmetype3"),
("Coral", "gemmetype3"),
("Etoile d'eau", "gemmetype3"),
("Grenat rouge", "gemmetype3"),
("grenat vert sombre", "gemmetype3"),
("Jade", "gemmetype3"),
("jais", "gemmetype3"),
("Larmes de Laérale", "gemmetype3"),
("Peau d'agne", "gemmetype3"),
("Perle dorée", "gemmetype3"),
("Perle rose", "gemmetype3"),
("Perle argnetée", "gemmetype3"),
("Perle Blanche", "gemmetype3"),
("Spinelle rouge", "gemmetype3"),
("Spinelle rouge sombre", "gemmetype3"),
("Spinelle vert sombre", "gemmetype3"),
("Tourmaline blanche", "gemmetype3"),
("Tourmaline dorée", "gemmetype3"),
("Tourmaline rose", "gemmetype3"),
("Perle d'argent", "gemmetype3"),

("Aigue-marine", "gemmetype4"),
("Alexandrite", "gemmetype4"),
("Grenat violet", "gemmetype4"),
("Perle noire", "gemmetype4"),
("Spinelle bleu nuit", "gemmetype4"),
("Topaze jaune d'or", "gemmetype4"),

("Corbinard", "gemmetype5"),
("Coridon jaune ambré", "gemmetype5"),
("Coridon pourpre", "gemmetype5"),
("Coridon noir", "gemmetype5"),
("Coridon bleu", "gemmetype5"),
("Emeraude", "gemmetype5"),
("Jade de sépulere", "gemmetype5"),
("Larmes rouges", "gemmetype5"),
("Opale blanche", "gemmetype5"),
("opale noire de feu", "gemmetype5"),
("Opale d'eau", "gemmetype5"),
("Orle", "gemmetype5"),
("Rubis étoilé", "gemmetype5"),
("Saphir étoilé noir", "gemmetype5"),
("Saphir étoilé bleu", "gemmetype5"),

("Belgurile", "gemmetype6"),
("Diamant limpide", "gemmetype6"),
("Diamant jaune", "gemmetype6"),
("Diamant rose", "gemmetype6"),
("Diamant brun", "gemmetype6"),
("Diamant bleu", "gemmetype6"),
("Emeraude du vert le plus clair", "gemmetype6"),
("Hyacinthe", "gemmetype6"),
("Larmes de roi", "gemmetype6"),
("Rubis", "gemmetype6"),

("Barbare", "typedeherosmas"),
("Barde", "typedeherosmas"),
("Druide", "typedeherosmas"),
("Ensorceleur", "typedeherosmas"),
("Guerrier", "typedeherosmas"),
("Magicien", "typedeherosmas"),
("Moine", "typedeherosmas"),
("Paladin", "typedeherosmas"),
("Prêtre", "typedeherosmas"),
("Rôdeur", "typedeherosmas"),
("Roublard", "typedeherosmas"),

("Barbare", "typedeherosfem"),
("Barde", "typedeherosfem"),
("Druidesse", "typedeherosfem"),
("Ensorceleuse", "typedeherosfem"),
("Guerrière", "typedeherosfem"),
("Magicienne", "typedeherosfem"),
("Moine", "typedeherosfem"),
("Paladine", "typedeherosfem"),
("Prêtresse", "typedeherosfem"),
("Rôdeuse", "typedeherosfem"),
("Roublarde", "typedeherosfem"),

("Un acrobate", "hommedupeuple"),
("Un jongleur", "hommedupeuple"),
("Un artiste de rue", "hommedupeuple"),
("Un(e) prostitué(e)", "hommedupeuple"),
("Un tanneur", "hommedupeuple"),
("Un potier", "hommedupeuple"),
("Un menuisier", "hommedupeuple"),
("Un barbier", "hommedupeuple"),
("Un horloger", "hommedupeuple"),
("Un crieur public", "hommedupeuple"),

("Un soigneur", "adepte"),
("Un alchimiste", "adepte"),
("Un herboriste", "adepte"),
("Un apothicaire", "adepte"),
("Un scribe", "adepte"),

("Un tisserand", "expert"),
("Un palefrenier", "expert"),
("Un architecte", "expert"),
("Un forgeron", "expert"),
("Un armurier", "expert"),
("Un artisan du cuir", "expert"),
("Un chasseur", "expert"),
("Un tailleur de pierre", "expert"),
("Un joaillier", "expert"),
("Un cordonnier", "expert"),
("Un charpentier", "expert"),
("Un maçon", "expert"),
("Un meûnier", "expert"),
("Un couturier", "expert"),
("Un boquetier", "expert"),
("Un bourreau", "expert"),
("Un calamier ", "expert"),
("Un homme de loi", "expert"),
("Un assassin", "expert"),
("Un navigateur", "expert"),
("Un guide", "expert"),
("Un fromager", "expert"),
("Un épicier", "expert"),
("Un vendeur d'objet rare", "expert"),
("Un boulanger", "expert"),

("Un dispensaire", "commerce"),
("Une étable", "commerce"),
("Une salle de jeux", "commerce"),
("Une petite échoppe de magie", "commerce"),
("Une librairie (non magique)", "commerce"),
("Un moulin", "commerce"),
("Un maréchal-ferrant", "commerce"),
("Une maison de joie", "commerce"),
("Une menuiserie", "commerce"),
("Un hôtel", "commerce"),
("Une épicerie", "commerce"),
("Une boulangerie", "commerce"),
("Un temple d'une divinité bonne", "commerce"),
("Une temple d'une divinité mauvaise", "commerce"),

("Un chantier maritime", "expertmarin"),
("Une capitainerie", "expertmarin"),
("Un chantier naval", "expertmarin"),
("Un port", "expertmarin"),
("Une poissonnerie", "expertmarin"),

("Un cartographe", "commercemarin"),
("Une équipe de mousses", "commercemarin"),
("Un capitaine", "commercemarin"),
("Un batelier", "commercemarin"),
("Un poissonnier", "commercemarin"),

("Impératrice", "titrenoblessefemfull"),
("Reine", "titrenoblessefemfull"),
("Grande-duchesse", "titrenoblessefemfull"),
("Archiduchesse", "titrenoblessefemfull"),
("Duchesse", "titrenoblessefemfull"),
("Princesse", "titrenoblessefemfull"),
("Marquise", "titrenoblessefemfull"),
("Comtesse", "titrenoblessefemfull"),
("Vicomtesse", "titrenoblessefemfull"),
("Baronne", "titrenoblessefemfull"),
("Dame", "titrenoblessefemfull"),
("Première Impératrice", "titrenoblessefemfull"),
("Première Reine", "titrenoblessefemfull"),
("Première Grande-duchesse", "titrenoblessefemfull"),
("Première Archiduchesse", "titrenoblessefemfull"),
("Première Duchesse", "titrenoblessefemfull"),
("Première Princesse", "titrenoblessefemfull"),
("Première Marquise", "titrenoblessefemfull"),
("Première Comtesse", "titrenoblessefemfull"),
("Première Vicomtesse", "titrenoblessefemfull"),
("Première Baronne", "titrenoblessefemfull"),
("Première Dame", "titrenoblessefemfull"),
("Seconde Impératrice", "titrenoblessefemfull"),
("Seconde Reine", "titrenoblessefemfull"),
("Seconde Grande-duchesse", "titrenoblessefemfull"),
("Seconde Archiduchesse", "titrenoblessefemfull"),
("Seconde Duchesse", "titrenoblessefemfull"),
("Seconde Princesse", "titrenoblessefemfull"),
("Seconde Marquise", "titrenoblessefemfull"),
("Seconde Comtesse", "titrenoblessefemfull"),
("Seconde Vicomtesse", "titrenoblessefemfull"),
("Seconde Baronne", "titrenoblessefemfull"),
("Seconde Dame", "titrenoblessefemfull"),

("Empereur", "titrenoblessemasfull"),
("Roi", "titrenoblessemasfull"),
("Grand-duc", "titrenoblessemasfull"),
("Archiduc", "titrenoblessemasfull"),
("Duc", "titrenoblessemasfull"),
("Prince", "titrenoblessemasfull"),
("Marquis", "titrenoblessemasfull"),
("Comte", "titrenoblessemasfull"),
("Vicomte", "titrenoblessemasfull"),
("Baron", "titrenoblessemasfull"),
("Chevalier", "titrenoblessemasfull"),
("Écuyer", "titrenoblessemasfull"),
("Seigneur", "titrenoblessemasfull"),
("Dauphin", "titrenoblessemasfull"),
("Monsieur", "titrenoblessemasfull"),
("Banneret", "titrenoblessemasfull"),
("Baronnet", "titrenoblessemasfull"),
("Châtelain", "titrenoblessemasfull"),
("Prince de sang", "titrenoblessemasfull"),
("Premier Empereur", "titrenoblessemasfull"),
("Premier Roi", "titrenoblessemasfull"),
("Premier Grand-duc", "titrenoblessemasfull"),
("Premier Archiduc ", "titrenoblessemasfull"),
("Premier Duc ", "titrenoblessemasfull"),
("Premier Prince", "titrenoblessemasfull"),
("Premier Marquis", "titrenoblessemasfull"),
("Premier Comte", "titrenoblessemasfull"),
("Premier Vicomte", "titrenoblessemasfull"),
("Premier Baron", "titrenoblessemasfull"),
("Premier Chevalier", "titrenoblessemasfull"),
("Premier écuyer", "titrenoblessemasfull"),
("Premier Seigneur", "titrenoblessemasfull"),
("Premier Dauphin", "titrenoblessemasfull"),
("Premier Banneret", "titrenoblessemasfull"),
("Premier Baronnet", "titrenoblessemasfull"),
("Premier Prince de sang", "titrenoblessemasfull"),
("Premier Châtelain", "titrenoblessemasfull"),
("Second Empereur", "titrenoblessemasfull"),
("Second Roi", "titrenoblessemasfull"),
("Second Grand-duc", "titrenoblessemasfull"),
("Second Archiduc", "titrenoblessemasfull"),
("Second Duc", "titrenoblessemasfull"),
("Second Prince", "titrenoblessemasfull"),
("Second Marquis", "titrenoblessemasfull"),
("Second Comte", "titrenoblessemasfull"),
("Second Vicomte", "titrenoblessemasfull"),
("Second Baron", "titrenoblessemasfull"),
("Second Chevalier", "titrenoblessemasfull"),
("Second écuyer", "titrenoblessemasfull"),
("Second Seigneur", "titrenoblessemasfull"),
("Second Dauphin", "titrenoblessemasfull"),
("Second Banneret", "titrenoblessemasfull"),
("Second Baronnet", "titrenoblessemasfull"),
("Second Prince de sang", "titrenoblessemasfull"),

("Duchesse", "titrenoblessefemfaible"),
("Marquise", "titrenoblessefemfaible"),
("Comtesse", "titrenoblessefemfaible"),
("Vicomtesse", "titrenoblessefemfaible"),
("Baronne", "titrenoblessefemfaible"),
("Dame", "titrenoblessefemfaible"),
("Première Duchesse", "titrenoblessefemfaible"),
("Première Marquise", "titrenoblessefemfaible"),
("Première Comtesse", "titrenoblessefemfaible"),
("Première Vicomtesse", "titrenoblessefemfaible"),
("Première Baronne", "titrenoblessefemfaible"),
("Première Dame", "titrenoblessefemfaible"),
("Seconde Duchesse", "titrenoblessefemfaible"),
("Seconde Marquise", "titrenoblessefemfaible"),
("Seconde Comtesse", "titrenoblessefemfaible"),
("Seconde Vicomtesse", "titrenoblessefemfaible"),
("Seconde Baronne", "titrenoblessefemfaible"),
("Seconde Dame", "titrenoblessefemfaible"),

("Marquis", "titrenoblessemasfaible"),
("Comte", "titrenoblessemasfaible"),
("Vicomte", "titrenoblessemasfaible"),
("Baron", "titrenoblessemasfaible"),
("Chevalier", "titrenoblessemasfaible"),
("Écuyer", "titrenoblessemasfaible"),
("Seigneur", "titrenoblessemasfaible"),
("Dauphin", "titrenoblessemasfaible"),
("Monsieur", "titrenoblessemasfaible"),
("Banneret", "titrenoblessemasfaible"),
("Baronnet", "titrenoblessemasfaible"),
("Châtelain", "titrenoblessemasfaible"),
("Premier Marquis", "titrenoblessemasfaible"),
("Premier Comte", "titrenoblessemasfaible"),
("Premier Vicomte", "titrenoblessemasfaible"),
("Premier Baron", "titrenoblessemasfaible"),
("Premier Chevalier", "titrenoblessemasfaible"),
("Premier Écuyer", "titrenoblessemasfaible"),
("Premier Seigneur", "titrenoblessemasfaible"),
("Premier Dauphin", "titrenoblessemasfaible"),
("Premier Banneret", "titrenoblessemasfaible"),
("Premier Baronnet", "titrenoblessemasfaible"),
("Premier Châtelain", "titrenoblessemasfaible"),
("Second Marquis", "titrenoblessemasfaible"),
("Second Comte", "titrenoblessemasfaible"),
("Second Vicomte", "titrenoblessemasfaible"),
("Second Baron", "titrenoblessemasfaible"),
("Second Chevalier", "titrenoblessemasfaible"),
("Second Écuyer", "titrenoblessemasfaible"),
("Second Seigneur", "titrenoblessemasfaible"),
("Second Dauphin", "titrenoblessemasfaible"),
("Second Banneret", "titrenoblessemasfaible"),
("Second Baronnet", "titrenoblessemasfaible"),

("un maire", "typedirigeanttradisolo"),
("un noble", "typedirigeanttradisolo"),
("un aventurier à la retraite", "typedirigeanttradisolo"),
("un riche marchand", "typedirigeanttradisolo"),
("un prêtre de faible puissance", "typedirigeanttradisolo"),
("un mage de faible puissance", "typedirigeanttradisolo"),
("un troubadour", "typedirigeanttradisolo"),
("un membre des ménestrels", "typedirigeanttradisolo"),
("un officier", "typedirigeanttradisolo"),
("un commandant", "typedirigeanttradisolo"),
("un sénéchal", "typedirigeanttradisolo"),
("un baron", "typedirigeanttradisolo"),
("un compte", "typedirigeanttradisolo"),
("un grand-duc", "typedirigeanttradisolo"),
("un marquis", "typedirigeanttradisolo"),
("un duc", "typedirigeanttradisolo"),

("un conseil municipal", "typedirigeanttradimulti"),
("un ensemble de marchands", "typedirigeanttradimulti"),
("un ensemble de prêtres de différents cultes de la nature", "typedirigeanttradimulti"),
("un groupe d'aventuriers à la retraite", "typedirigeanttradimulti"),
("un ensemble de prêtres de confession bienveillante", "typedirigeanttradimulti"),

("une guilde de voleurs", "typedirigeantinhabsolo"),
("une guilde de marchands", "typedirigeantinhabsolo"),
("une guilde d'artisans", "typedirigeantinhabsolo"),
("une guilde d'assassins", "typedirigeantinhabsolo"),
("une guilde de mercenaires", "typedirigeantinhabsolo"),

("une guilde de voleurs", "typedirigeantinhabmulti"),
("une guilde de marchands", "typedirigeantinhabmulti"),
("une guilde d'artisans", "typedirigeantinhabmulti"),
("une guilde d'assassins", "typedirigeantinhabmulti"),
("une guilde de mercenaires", "typedirigeantinhabmulti"),

("un mage isolé puissant", "typedirigeantinmagsolo"),
("un mage isolé très puissant et versatile", "typedirigeantinmagsolo"),
("un ensorceleur versatile", "typedirigeantinmagsolo"),
("un chaman au charisme extraordinaire", "typedirigeantinmagsolo"),
("un prête ayant une foi inébranlable", "typedirigeantinmagsolo"),

("un conseil de mages", "typedirigeantinmagmulti"),
("un temple de confession bonne", "typedirigeantinmagmulti"),
("un ordre religieux extrémiste", "typedirigeantinmagmulti"),
("un ordre religieux totalitaire", "typedirigeantinmagmulti"),

("un magicien ayant pactisé avec un démon afin de ne plus veillir", "monstrueux"),
("un doppelgänger usurpant l'identité du vrai dirigeant", "monstrueux"),
("un pion au services d'une organisation", "monstrueux"),
("un pion devant rendre des comptes à une créature puissantes (dragon, démon,...)", "monstrueux"),
("dirigé par un flageleur mental qui s'amuse", "monstrueux"),

("d'un abri fortifié", "ChateauTaille1"),
("d'un refuge fortifié", "ChateauTaille1"),
("d'une habitation fortifiée", "ChateauTaille1"),
("d'une maison fortifiée", "ChateauTaille1"),
("d'une demeure fortifiée", "ChateauTaille1"),
("d'une résidence fortifiée", "ChateauTaille1"),
("d'un manoir fortifié", "ChateauTaille1"),

("d'un abri fortifié", "ChateauTaille2"),
("d'un refuge fortifié", "ChateauTaille2"),
("d'une habitation fortifiée", "ChateauTaille2"),
("d'une maison fortifiée", "ChateauTaille2"),
("d'une demeure fortifiée", "ChateauTaille2"),
("d'une résidence fortifiée", "ChateauTaille2"),
("d'un manoir fortifié", "ChateauTaille2"),
("d'un palais fortifié", "ChateauTaille2"),
("d'un donjon", "ChateauTaille2"),

("d'un abri fortifié", "ChateauTaille3"),
("d'un refuge fortifié", "ChateauTaille3"),
("d'une habitation fortifiée", "ChateauTaille3"),
("d'une maison fortifiée", "ChateauTaille3"),
("d'une demeure fortifiée", "ChateauTaille3"),
("d'une résidence fortifiée", "ChateauTaille3"),
("d'un manoir fortifié", "ChateauTaille3"),
("d'un palais fortifié", "ChateauTaille3"),
("d'un donjon", "ChateauTaille3"),
("d'une tour", "ChateauTaille3"),
("d'une bastille", "ChateauTaille3"),
("d'une place-forte", "ChateauTaille3"),

("d'une habitation fortifiée", "ChateauTaille4"),
("d'une maison fortifiée", "ChateauTaille4"),
("d'une emeure fortifiée", "ChateauTaille4"),
("d'une résidence fortifiée", "ChateauTaille4"),
("d'un manoir fortifié", "ChateauTaille4"),
("d'un palais fortifié", "ChateauTaille4"),
("d'un donjon", "ChateauTaille4"),
("d'un châtelet", "ChateauTaille4"),
("d'une tour", "ChateauTaille4"),
("d'une bastille", "ChateauTaille4"),
("d'un manoir fortifié", "ChateauTaille4"),
("d'un palais fortifié", "ChateauTaille4"),
("d'un châtelet", "ChateauTaille4"),
("d'un donjon", "ChateauTaille4"),
("d'une tour", "ChateauTaille4"),
("d'une bastille", "ChateauTaille4"),
("d'une place-forte", "ChateauTaille4"),
("d'un fortin", "ChateauTaille4"),
("d'un fort", "ChateauTaille4"),

("d'un donjon", "ChateauTaille6"),
("d'une tour", "ChateauTaille6"),
("d'une bastille", "ChateauTaille6"),
("d'une place-forte", "ChateauTaille6"),
("d'un châtelet", "ChateauTaille6"),
("d'un fortin", "ChateauTaille6"),
("d'un fort", "ChateauTaille6"),
("d'une forteresse", "ChateauTaille6"),

("d'une tour", "ChateauTaille7"),
("d'une bastille", "ChateauTaille7"),
("d'une place-forte", "ChateauTaille7"),
("d'un fortin", "ChateauTaille7"),
("d'un châtelet", "ChateauTaille7"),
("d'un fort", "ChateauTaille7"),
("d'une forteresse", "ChateauTaille7"),
("d'un château", "ChateauTaille7"),
("d'une citadelle", "ChateauTaille7"),

("d'une bastille", "ChateauTaille8"),
("d'une place-forte", "ChateauTaille8"),
("d'un fortin", "ChateauTaille8"),
("d'un fort", "ChateauTaille8"),
("d'une forteresse", "ChateauTaille8"),
("d'un château", "ChateauTaille8"),
("d'une citadelle", "ChateauTaille8")

;
