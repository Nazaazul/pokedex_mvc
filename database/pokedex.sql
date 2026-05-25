-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 24-05-2026 a las 03:20:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokedex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL DEFAULT 1,
  `descripcion` text NOT NULL,
  `id_tipo1` int(11) NOT NULL DEFAULT 5,
  `id_tipo2` int(11) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `nombre`, `numero`, `descripcion`, `id_tipo1`, `id_tipo2`, `imagen`) VALUES
(1, 'Bulbasaur', 1, 'Una rara semilla le fue plantada en el lomo al nacer. La planta brota y crece con este Pokémon.', 4, 6, 'Bulbasaur.png'),
(2, 'Ivysaur', 2, 'Este Pokémon tiene un bulbo en el lomo. Dicen que, al absorber nutrientes, el bulbo se transforma en una flor grande.', 4, 6, 'Ivysaur.png'),
(3, 'Venusaur', 3, 'Llena su cuerpo de energía con los rayos solares que captan los anchos pétalos de su flor.', 4, 6, 'Venusaur.png'),
(4, 'Charmander', 4, 'La llama de su cola indica la fuerza vital de Charmander. Será brillante si está sano.', 2, NULL, 'Charmander.png'),
(5, 'Charmeleon', 5, 'Suele usar la cola para derribar a su rival. Cuando lo tira, se vale de sus afiladas garras para acabar con él.', 2, NULL, 'Charmeleon.png'),
(6, 'Charizard', 6, 'Cuando lanza una descarga de fuego supercaliente, la roja llama de su cola brilla más intensamente.', 2, 12, 'Charizard.png'),
(7, 'Squirtle', 7, 'Se protege con su caparazón y luego contraataca lanzando agua a presión cuando tiene oportunidad.', 3, NULL, 'Squirtle.png'),
(8, 'Wartortle', 8, 'Si es golpeado, esconderá su cabeza. Aun así, su cola puede seguir golpeando.', 3, NULL, 'Wartortle.png'),
(9, 'Blastoise', 9, 'Para acabar con su enemigo, lo aplasta con el peso de su cuerpo. En momentos de apuro, se esconde en el caparazón.', 3, NULL, 'Blastoise.png'),
(10, 'Caterpie', 10, 'Para protegerse despide un hedor horrible de sus antenas, con el que repele a sus enemigos.', 8, NULL, 'Caterpie.png'),
(11, 'Metapod', 11, 'Su frágil cuerpo está recubierto de una coraza dura como el acero. Permanece quieto en su desarrollo.', 8, NULL, 'Metapod.png'),
(12, 'Butterfree', 12, 'Adora el néctar de las flores. Puede localizar hasta las más pequeñas cantidades de polen.', 8, 12, 'Butterfree.png'),
(13, 'Weedle', 13, 'Suele habitar bosques y praderas. Tiene un afilado y venenoso aguijón de unos 5 cm encima de la cabeza.', 8, 6, 'Weedle.png'),
(14, 'Kakuna', 14, 'Casi incapaz de moverse, este Pokémon solo puede endurecer su caparazón para protegerse.', 8, 6, 'Kakuna.png'),
(15, 'Beedrill', 15, 'Tiene 3 aguijones venenosos en sus patas y cola. Suelen pinchar a sus enemigos repetidas veces.', 8, 6, 'Beedrill.png'),
(16, 'Pidgey', 16, 'Muy común en bosques y selvas. Aletea al nivel del suelo para levantar la gravilla.', 5, 12, 'Pidgey.png'),
(17, 'Pidgeotto', 17, 'Tiene unas garras desarrolladas. Puede atrapar un Exeggcute y transportarlo desde una distancia de casi 100 km.', 5, 12, 'Pidgeotto.png'),
(18, 'Pidgeot', 18, 'Cuando caza, vuela muy deprisa a ras del agua y sorprende a inocentes presas como Magikarp.', 5, 12, 'Pidgeot.png'),
(19, 'Rattata', 19, 'Vive allí donde haya comida disponible. Busca todo el día, sin descanso, algo comestible.', 5, NULL, 'Rattata.png'),
(20, 'Raticate', 20, 'Lima sus colmillos royendo objetos duros. Con ellos puede destruir incluso paredes de hormigón.', 5, NULL, 'Raticate.png'),
(21, 'Spearow', 21, 'Muy protector de su territorio, mueve sus cortas alas sin descanso para lanzarse a toda velocidad.', 5, 12, 'Spearow.png'),
(22, 'Fearow', 22, 'Con sus enormes y magníficas alas, puede seguir volando sin tener que aterrizar para descansar.', 5, 12, 'Fearow.png'),
(23, 'Ekans', 23, 'Cuanto más viejo, más crece este Pokémon. Por la noche, descansa en las ramas de los árboles.', 6, NULL, 'Ekans.png'),
(24, 'Arbok', 24, 'El dibujo que tiene en la panza aterroriza. Los rivales más débiles salen huyendo al verlo.', 6, NULL, 'Arbok.png'),
(25, 'Pikachu', 25, 'Levanta su cola para vigilar los alrededores. A veces, puede ser alcanzado por un rayo en esa pose.', 1, NULL, 'Pikachu.png'),
(26, 'Raichu', 26, 'Cuando se carga de electricidad, sus músculos se tensan y se vuelve más agresivo de lo normal.', 1, NULL, 'Raichu.png'),
(27, 'Sandshrew', 27, 'Este Pokémon permanece bajo tierra. Si se siente amenazado, se enrosca para defenderse.', 10, NULL, 'Sandshrew.png'),
(28, 'Sandslash', 28, 'Si cava a gran velocidad, puede que se le caigan las garras y púas. Vuelven a crecerle en un día.', 10, NULL, 'Sandslash.png'),
(29, 'Nidoran-f', 29, 'Aunque pequeñas, sus venenosas púas son muy peligrosas. Tienen un cuerno más pequeño que los machos.', 6, NULL, 'Nidoran-f.png'),
(30, 'Nidorina', 30, 'Tiene un carácter afable. Emite ondas ultrasónicas para confundir al enemigo.', 6, NULL, 'Nidorina.png'),
(31, 'Nidoqueen', 31, 'Usa su cuerpo duro y escamoso para sellar la entrada a su madriguera y protegerse de los depredadores.', 6, 10, 'Nidoqueen.png'),
(32, 'Nidoran-m', 32, 'Saca las orejas por encima de la hierba para explorar el territorio. Le protege su cuerno venenoso.', 6, NULL, 'Nidoran-m.png'),
(33, 'Nidorino', 33, 'Levanta sus grandes orejas para vigilar. Si detecta algo, atacará de inmediato.', 6, NULL, 'Nidorino.png'),
(34, 'Nidoking', 34, 'Es fácil reconocerlo por tener una dura piel y un gran cuerno lleno de peligrosísimo veneno.', 6, 10, 'Nidoking.png'),
(35, 'Clefairy', 35, 'Se dice que la felicidad llegará a quien vea a un grupo de Clefairy bailando a la luz de la luna llena.', 16, NULL, 'Clefairy.png'),
(36, 'Clefable', 36, 'Su oído es tan agudo que puede oír una aguja caer a 1 km. Vive en montañas solitarias.', 16, NULL, 'Clefable.png'),
(37, 'Vulpix', 37, 'Cuando nace solo tiene una cola, pero a medida que crece, esta se va dividiendo desde la punta.', 2, NULL, 'Vulpix.png'),
(38, 'Ninetales', 38, 'Tiene nueve colas y un pelaje de color dorado. Dicen que este Pokémon llega a vivir 1000 años.', 2, NULL, 'Ninetales.png'),
(39, 'Jigglypuff', 39, 'Cautiva con la mirada a su enemigo y hace que se quede profundamente dormido mientras entona una dulce melodía.', 5, 16, 'Jigglypuff.png'),
(40, 'Wigglytuff', 40, 'Su piel es tan suave que si dos de ellos se acurrucan juntos, no querrán separarse nunca.', 5, 16, 'Wigglytuff.png'),
(41, 'Zubat', 41, 'Aunque carezca de ojos, puede detectar obstáculos con las ondas ultrasónicas que emite su boca.', 6, 12, 'Zubat.png'),
(42, 'Golbat', 42, 'Cuando ataque, seguirá chupando energía de su víctima, aunque pese tanto que ya no pueda volar.', 6, 12, 'Golbat.png'),
(43, 'Oddish', 43, 'Durante el día, se agazapa en el frío subsuelo huyendo del sol. La luz de la luna le hace crecer mucho.', 4, 6, 'Oddish.png'),
(44, 'Gloom', 44, '¡Huele bastante mal! De todas formas, una de cada mil personas aprecian su fétido olor.', 4, 6, 'Gloom.png'),
(45, 'Vileplume', 45, 'Cuanto mayores son sus pétalos, más tóxico es su polen. Le pesa la cabeza y le cuesta mantenerla erguida.', 4, 6, 'Vileplume.png'),
(46, 'Paras', 46, 'Lleva en el lomo dos setas parásitas llamadas tochukaso, que crecen con él.', 8, 4, 'Paras.png'),
(47, 'Parasect', 47, 'Parasect está dominado por una seta parásita mayor que él. Dispersa esporas venenosas.', 8, 4, 'Parasect.png'),
(48, 'Venonat', 48, 'Sus grandes ojos son en realidad grupos de ojos diminutos. Por la noche se siente atraído por la luz.', 8, 6, 'Venonat.png'),
(49, 'Venomoth', 49, 'Lanza unas escamas que paralizan a cualquiera. Quien las toque, no podrá ni ponerse de pie.', 8, 6, 'Venomoth.png'),
(50, 'Diglett', 50, 'Vive un metro por debajo del suelo, donde se alimenta de raíces. También aparece en la superficie.', 10, NULL, 'Diglett.png'),
(51, 'Dugtrio', 51, 'En combate, cava la tierra, se esconde y sale de repente para golpear a su rival. Nunca se sabe por dónde puede aparecer.', 10, NULL, 'Dugtrio.png'),
(52, 'Meowth', 52, 'Es de naturaleza nocturna. Le atraen los objetos brillantes.', 5, NULL, 'Meowth.png'),
(53, 'Persian', 53, 'Aunque es muy admirado por el pelo, es difícil de entrenar como mascota, porque es un poco travieso.', 5, NULL, 'Persian.png'),
(54, 'Psyduck', 54, 'Padece continuamente dolores de cabeza. Cuando son muy fuertes, empieza a usar misteriosos poderes.', 3, NULL, 'Psyduck.png'),
(55, 'Golduck', 55, 'Aparece en ríos al anochecer. Puede usar poderes telequinéticos si su frente brilla misteriosamente.', 3, NULL, 'Golduck.png'),
(56, 'Mankey', 56, 'Es peligroso acercarse si se enfada sin razón aparente, ya que no distingue entre amigos y enemigos.', 11, NULL, 'Mankey.png'),
(57, 'Primeape', 57, 'Solo se calma cuando nadie está cerca. Llegar a ver ese momento es realmente difícil.', 11, NULL, 'Primeape.png'),
(58, 'Growlithe', 58, 'Es muy agradable y leal. Para ahuyentar al enemigo, se pone a ladrar y a dar bocados.', 2, NULL, 'Growlithe.png'),
(59, 'Arcanine', 59, 'Un Pokémon muy admirado desde la antigüedad por su belleza. Corre ágilmente como si tuviera alas.', 2, NULL, 'Arcanine.png'),
(60, 'Poliwag', 60, 'Tiene una piel extraordinaria, fina y húmeda, que deja entrever las vísceras que tiene dispuestas en espiral.', 3, NULL, 'Poliwag.png'),
(61, 'Poliwhirl', 61, 'Capaz de vivir dentro o fuera del agua. Fuera del agua suda para mantener baboso su cuerpo.', 3, NULL, 'Poliwhirl.png'),
(62, 'Poliwrath', 62, 'Tiene músculos muy desarrollados. Es capaz de nadar en el océano sin descanso.', 3, 11, 'Poliwrath.png'),
(63, 'Abra', 63, 'Duerme 18 horas al día y mientras lo hace es capaz de usar una serie de poderes extrasensoriales.', 7, NULL, 'Abra.png'),
(64, 'Kadabra', 64, 'Cuando utiliza su poder psíquico, emite poderosas ondas alfa que pueden destruir dispositivos.', 7, NULL, 'Kadabra.png'),
(65, 'Alakazam', 65, 'Sus neuronas se multiplican continuamente durante su vida. Por eso, siempre lo recuerda todo.', 7, NULL, 'Alakazam.png'),
(66, 'Machop', 66, 'Levanta un Graveler para mantener sus músculos en forma. Domina todas las artes marciales.', 11, NULL, 'Machop.png'),
(67, 'Machoke', 67, 'Su musculoso cuerpo es tan fuerte que usa un cinto antifuerza para controlar sus movimientos.', 11, NULL, 'Machoke.png'),
(68, 'Machamp', 68, 'Tiene cuatro brazos tan bien desarrollados que puede dar una serie de 1000 puñetazos en cuestión de dos segundos.', 11, NULL, 'Machamp.png'),
(69, 'Bellsprout', 69, 'Aunque su cuerpo es extremadamente delgado, es muy rápido a la hora de capturar sus presas.', 4, 6, 'Bellsprout.png'),
(70, 'Weepinbell', 70, 'Las hojas que tiene actúan como cuchillas en combate. Otra de sus armas es el corrosivo fluido que expulsa.', 4, 6, 'Weepinbell.png'),
(71, 'Victreebel', 71, 'Dicen que vive en grandes colonias en el interior de las junglas, aunque nadie ha podido verificarlo.', 4, 6, 'Victreebel.png'),
(72, 'Tentacool', 72, 'Su cuerpo se compone casi en exclusiva de agua. Lanza extraños rayos con sus ojos cristalinos.', 3, 6, 'Tentacool.png'),
(73, 'Tentacruel', 73, 'Cuando caza, extiende los cortos tentáculos que tiene para atrapar e inmovilizar a su presa.', 3, 6, 'Tentacruel.png'),
(74, 'Geodude', 74, 'Aparecen en llanos y montañas. Como parecen rocas, la gente se tropieza con ellos o los pisa.', 9, 10, 'Geodude.png'),
(75, 'Graveler', 75, 'De naturaleza descuidada y libre, no le importa dañarse cuando baja rodando montañas.', 9, 10, 'Graveler.png'),
(76, 'Golem', 76, 'Se lanza montaña abajo y deja un surco desde la cima hasta el pie. Es mejor mantenerse alejado.', 9, 10, 'Golem.png'),
(77, 'Ponyta', 77, 'Cuando nace, apenas puede tenerse en pie. Pero va fortaleciendo las patas en cuanto empieza a galopar.', 2, NULL, 'Ponyta.png'),
(78, 'Rapidash', 78, 'Galopa a casi 240 km por hora. Su crin ardiente parece una flecha cuando corre.', 2, NULL, 'Rapidash.png'),
(79, 'Slowpoke', 79, 'Descansa ocioso junto al agua. Si algo muerde su cola, no lo notará en todo el día.', 3, 7, 'Slowpoke.png'),
(80, 'Slowbro', 80, 'Tiene una cola tan apetecible, que el Shellder que va enganchado a ella no se soltará por nada del mundo.', 3, 7, 'Slowbro.png'),
(81, 'Magnemite', 81, 'Las unidades a los lados de su cuerpo generan energía antigravitatoria para mantenerlo en el aire.', 1, 17, 'Magnemite.png'),
(82, 'Magneton', 82, 'Lo constituye un grupo de Magnemite. Descarga potentes ondas magnéticas de alto voltaje.', 1, 17, 'Magneton.png'),
(83, 'Farfetchd', 83, 'El puerro que lleva es su mejor arma. Suele usarlo como espada para cortar cosas.', 5, 12, 'Farfetchd.png'),
(84, 'Doduo', 84, 'Este Pokémon de dos cabezas es el resultado de una mutación. Cuando corre, puede alcanzar casi 100 km por hora.', 5, 12, 'Doduo.png'),
(85, 'Dodrio', 85, 'Más vale no perder de vista ninguna de las tres cabezas. De lo contrario, el número de picotazos será enorme.', 5, 12, 'Dodrio.png'),
(86, 'Seel', 86, 'Este Pokémon vive en icebergs. Nada en el mar y usa el cuerno de su cabeza para romper el hielo.', 3, NULL, 'Seel.png'),
(87, 'Dewgong', 87, 'Está recubierto de un luminoso pelaje blanco. Este Pokémon aumenta su actividad cuando bajan las temperaturas.', 3, 13, 'Dewgong.png'),
(88, 'Grimer', 88, 'Nace de lodo alterado al filtrarse en el agua los rayos X reflejados por la Luna. Se alimenta de sustancias desagradables.', 6, NULL, 'Grimer.png'),
(89, 'Muk', 89, 'Les encanta reunirse en zonas apestosas donde se acumula el lodo, haciendo su olor más insoportable.', 6, NULL, 'Muk.png'),
(90, 'Shellder', 90, 'La concha lo protege de cualquier tipo de ataque. Solo es vulnerable cuando se abre.', 3, NULL, 'Shellder.png'),
(91, 'Cloyster', 91, 'A los Cloyster que viven en las fuertes corrientes marinas les crecen largas y afiladas púas en la concha.', 3, 13, 'Cloyster.png'),
(92, 'Gastly', 92, 'Su etéreo cuerpo está hecho de gas. Puede envolver a un oponente de cualquier tamaño hasta ahogarlo.', 15, 6, 'Gastly.png'),
(93, 'Haunter', 93, 'Cuando tienes la sensación de que te están observando, seguro que es porque Haunter está cerca.', 15, 6, 'Haunter.png'),
(94, 'Gengar', 94, 'Se esconde entre las sombras. Se dice que donde Gengar acecha, la temperatura baja 5 °C.', 15, 6, 'Gengar.png'),
(95, 'Onix', 95, 'Cava a gran velocidad en busca de comida. Los túneles que deja son usados por los Diglett.', 9, 10, 'Onix.png'),
(96, 'Drowzee', 96, 'Adormece a sus enemigos y se come sus sueños. A veces se pone enfermo si come pesadillas.', 7, NULL, 'Drowzee.png'),
(97, 'Hypno', 97, 'Lleva un péndulo en la mano. Una vez, hizo desaparecer a un niño al que había hipnotizado.', 7, NULL, 'Hypno.png'),
(98, 'Krabby', 98, 'Ante el peligro, se camufla con las burbujas que desprende su boca, para parecer más grande.', 3, NULL, 'Krabby.png'),
(99, 'Kingler', 99, 'La pinza tan grande que tiene posee una fuerza de 10 000 caballos de potencia. Pero, por su gran tamaño, cuesta moverla.', 3, NULL, 'Kingler.png'),
(100, 'Voltorb', 100, 'Fue descubierto cuando se crearon las Poké Balls. Se dice que tiene algo que ver con ellas.', 1, NULL, 'Voltorb.png'),
(101, 'Electrode', 101, 'Explotan a la mínima. Por eso se les tiene mucho miedo. Estos Pokémon reciben el mote de Bomba Ball.', 1, NULL, 'Electrode.png'),
(102, 'Exeggcute', 102, 'Estos seis huevos se comunican por telepatía. Si se separan, se pueden reunir rápidamente.', 4, 7, 'Exeggcute.png'),
(103, 'Exeggutor', 103, 'Sus tres cabezas piensan de forma independiente. Sin embargo, son amigas y no suelen discutir nunca.', 4, 7, 'Exeggutor.png'),
(104, 'Cubone', 104, 'Lleva puesto el cráneo de su madre. Cuando se siente solo se pone a gritar muy fuerte.', 10, NULL, 'Cubone.png'),
(105, 'Marowak', 105, 'Es pequeño y siempre ha sido muy débil. Cuando empezó a usar huesos, se volvió más violento.', 10, NULL, 'Marowak.png'),
(106, 'Hitmonlee', 106, 'Encoge y estira las patas a su antojo. Cuando las estira, es capaz de propinar una buena patada al enemigo.', 11, NULL, 'Hitmonlee.png'),
(107, 'Hitmonchan', 107, 'Los potentes golpes de sus brazos pueden pulverizar el hormigón. Descansa tras luchar tres minutos.', 11, NULL, 'Hitmonchan.png'),
(108, 'Lickitung', 108, 'Su larga lengua, recubierta de saliva pegajosa, se pega a todo, por lo que es muy útil.', 5, NULL, 'Lickitung.png'),
(109, 'Koffing', 109, 'Tiene forma de globo y es muy ligero. Está compuesto por gases tóxicos y apesta.', 6, NULL, 'Koffing.png'),
(110, 'Weezing', 110, 'Si uno de los gemelos Koffing se infla, el otro se desinfla. Mezclan constantemente sus venenosos gases.', 6, NULL, 'Weezing.png'),
(111, 'Rhyhorn', 111, 'Es muy fuerte, pero no especialmente listo. Es capaz de derribar rascacielos usando Placaje varias veces.', 10, 9, 'Rhyhorn.png'),
(112, 'Rhydon', 112, 'La piel le sirve de escudo protector. Puede vivir en lava líquida a 2000 °C de temperatura.', 10, 9, 'Rhydon.png'),
(113, 'Chansey', 113, 'Se dice que reparte felicidad. Se caracteriza por su compasión y reparte sus huevos entre la gente herida.', 5, NULL, 'Chansey.png'),
(114, 'Tangela', 114, 'Se camufla con la multitud de lianas que envuelven su cuerpo y que no dejan de crecer a lo largo de toda su vida.', 4, NULL, 'Tangela.png'),
(115, 'Kangaskhan', 115, 'Lleva a su cría en la bolsa de su panza. Solo deja que su cría salga a jugar cuando no siente peligro.', 5, NULL, 'Kangaskhan.png'),
(116, 'Horsea', 116, 'Es famoso por derribar a bichos voladores lanzando tinta desde la superficie del agua.', 3, NULL, 'Horsea.png'),
(117, 'Seadra', 117, 'Las afiladas púas que le recubren el cuerpo se le erizan y pueden causar el debilitamiento con solo tocarlo.', 3, NULL, 'Seadra.png'),
(118, 'Goldeen', 118, 'Nada a una velocidad de cinco nudos. Si siente peligro, golpea con su afilado cuerno.', 3, NULL, 'Goldeen.png'),
(119, 'Seaking', 119, 'En otoño, cuando se reproducen, se les puede ver nadando con energía por ríos y arroyos.', 3, NULL, 'Seaking.png'),
(120, 'Staryu', 120, 'Aunque sus brazos se rompan podrán regenerarse, siempre y cuando su núcleo siga intacto.', 3, NULL, 'Staryu.png'),
(121, 'Starmie', 121, 'Su núcleo central brilla con los colores del arcoíris. Para algunos tiene el valor de una gema.', 3, 7, 'Starmie.png'),
(122, 'Mr-mime', 122, 'Para repeler ataques, solidifica el aire y crea muros invisibles con emanaciones de sus dedos.', 7, 16, 'Mr-mime.png'),
(123, 'Scyther', 123, 'Destroza a su presa con las guadañas que tiene. No es común que use las alas para volar.', 8, 12, 'Scyther.png'),
(124, 'Jynx', 124, 'Camina moviendo las caderas de forma llamativa. Puede hacer que la gente baile a su ritmo.', 13, 7, 'Jynx.png'),
(125, 'Electabuzz', 125, 'Por la superficie de su piel corre la electricidad. En la oscuridad, su cuerpo se torna blanquecino.', 1, NULL, 'Electabuzz.png'),
(126, 'Magmar', 126, 'A este Pokémon se lo encontraron cerca de un volcán. Esta criatura ígnea tiene una temperatura corporal de unos 1200 °C.', 2, NULL, 'Magmar.png'),
(127, 'Pinsir', 127, 'Atrapa presas con sus pinzas hasta que las parte en dos. Lanza lejos lo que no puede quebrar.', 8, NULL, 'Pinsir.png'),
(128, 'Tauros', 128, 'Después de animarse a luchar fustigándose con sus tres colas, carga a toda velocidad.', 5, NULL, 'Tauros.png'),
(129, 'Magikarp', 129, 'No es precisamente rápido ni fuerte. Es el Pokémon más debilucho y simplón de todos los que hay.', 3, NULL, 'Magikarp.png'),
(130, 'Gyarados', 130, 'En la literatura antigua se dice que un Gyarados rebosante de violencia arrasó un poblado.', 3, 12, 'Gyarados.png'),
(131, 'Lapras', 131, 'Son buenos de corazón. Muchos fueron capturados por ser tan pacíficos. Ahora hay muchos menos.', 3, 13, 'Lapras.png'),
(132, 'Ditto', 132, 'Puede alterar por completo su estructura celular para emular cualquier objeto que vea.', 5, NULL, 'Ditto.png'),
(133, 'Eevee', 133, 'Un extraño Pokémon que se adapta a los entornos más hostiles gracias a sus diferentes evoluciones.', 5, NULL, 'Eevee.png'),
(134, 'Vaporeon', 134, 'Prefiere las bellas costas. Con células parecidas al agua, podría fundirse en la misma.', 3, NULL, 'Vaporeon.png'),
(135, 'Jolteon', 135, 'Todos los pelos de su cuerpo se ponen de punta si empieza a cargarse de electricidad.', 1, NULL, 'Jolteon.png'),
(136, 'Flareon', 136, 'Almacena llamas en su cuerpo, que alcanza una temperatura de 900 °C antes de un combate.', 2, NULL, 'Flareon.png'),
(137, 'Porygon', 137, 'Pokémon creado por el hombre tras muchas investigaciones. Sus habilidades son básicas.', 5, NULL, 'Porygon.png'),
(138, 'Omanyte', 138, 'Pokémon prehistórico que vivió en el océano primordial. Para nadar se valía de sus 10 tentáculos.', 9, 3, 'Omanyte.png'),
(139, 'Omastar', 139, 'Tiene los tentáculos tan desarrollados que le sirven de manos y pies. Con ellos atrapa a su presa y le da un bocado.', 9, 3, 'Omastar.png'),
(140, 'Kabuto', 140, 'Se cree que habitó las playas hace 300 millones de años. Se protege con una dura concha.', 9, 3, 'Kabuto.png'),
(141, 'Kabutops', 141, 'Repliega sus extremidades en el agua para hacerse más compacto, y mueve su concha para nadar rápido.', 9, 3, 'Kabutops.png'),
(142, 'Aerodactyl', 142, 'Se regeneró a partir de material genético de un dinosaurio encontrado en ámbar. Cuando vuela emite escandalosos alaridos.', 9, 12, 'Aerodactyl.png'),
(143, 'Snorlax', 143, 'No se encuentra satisfecho hasta que no se come 400 kg de comida cada día. Cuando acaba de comer, se queda dormido.', 5, NULL, 'Snorlax.png'),
(144, 'Articuno', 144, 'Legendario Pokémon pájaro capaz de generar ventiscas congelando la humedad del aire.', 13, 12, 'Articuno.png'),
(145, 'Zapdos', 145, 'Es un legendario pájaro Pokémon. Dicen que aparece entre las nubes lanzando enormes rayos brillantes.', 1, 12, 'Zapdos.png'),
(146, 'Moltres', 146, 'Es más conocido como el legendario pájaro de fuego. Con cada aleteo crea brillantes llamas.', 2, 12, 'Moltres.png'),
(147, 'Dratini', 147, 'Se le llama el Pokémon Espejismo porque son muy pocos los que lo han visto. Se encontró su muda.', 14, NULL, 'Dratini.png'),
(148, 'Dragonair', 148, 'Sus cristalinos orbes parecen darle al Pokémon el poder de controlar el clima libremente.', 14, NULL, 'Dragonair.png'),
(149, 'Dragonite', 149, 'A pesar del tamaño que tiene y de lo pesado que es, puede volar. Es capaz de dar la vuelta al mundo en solo 16 horas.', 14, 12, 'Dragonite.png'),
(150, 'Mewtwo', 150, 'Fue creado por un científico tras años de horribles experimentos de ingeniería genética.', 7, NULL, 'Mewtwo.png'),
(151, 'Mew', 151, 'Varios científicos lo consideran el antecesor de los Pokémon porque usa todo tipo de movimientos.', 7, NULL, 'Mew.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `descripcion`, `imagen`) VALUES
(1, 'Eléctrico', 'Eléctrico.png'),
(2, 'Fuego', 'Fuego.png'),
(3, 'Agua', 'Agua.png'),
(4, 'Planta', 'Planta.png'),
(5, 'Normal', 'Normal.png'),
(6, 'Veneno', 'Veneno.png'),
(7, 'Psíquico', 'Psíquico.png'),
(8, 'Bicho', 'Bicho.png'),
(9, 'Roca', 'Roca.png'),
(10, 'Tierra', 'Tierra.png'),
(11, 'Lucha', 'Lucha.png'),
(12, 'Volador', 'Volador.png'),
(13, 'Hielo', 'Hielo.png'),
(14, 'Dragón', 'Dragón.png'),
(15, 'Fantasma', 'Fantasma.png'),
(16, 'Hada', 'Hada.png'),
(17, 'Acero', 'Acero.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_tipo1` (`id_tipo1`),
  ADD KEY `id_tipo2` (`id_tipo2`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD CONSTRAINT `pokemon_ibfk_1` FOREIGN KEY (`id_tipo1`) REFERENCES `tipo` (`id`),
  ADD CONSTRAINT `pokemon_ibfk_2` FOREIGN KEY (`id_tipo2`) REFERENCES `tipo` (`id`);
COMMIT;

-- Estructura de tabla para la tabla `usuarios`
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','usuario') DEFAULT 'usuario',
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcado de datos para la tabla `usuarios`
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `rol`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Administrador', 'admin@pokedex.com', '$2y$10$bX0KyKZzAdyKNX2Vl9dJu.4QJcuwLnnnWebimmHDUJ9t4VOJznwjm', 'admin', '2026-05-23 17:46:31', '2026-05-23 18:02:28'),
(2, 'Usuario Prueba', 'usuario@pokedex.com', '$2y$10$Vn178Hw8HkNSI4kn3Z/98eI7ZsgPoe7HQ2k22nuEwAEXGEWgv1Xte', 'usuario', '2026-05-23 17:46:31', '2026-05-23 18:02:28');

-- Indices de la tabla `usuarios`
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

-- AUTO_INCREMENT de la tabla `usuarios`
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
