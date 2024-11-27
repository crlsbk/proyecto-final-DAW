-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 27-11-2024 a las 02:00:49
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
-- Base de datos: `opeg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(5) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` longtext NOT NULL,
  `autor` varchar(100) NOT NULL,
  `publicacion_fecha` date NOT NULL,
  `tipo` tinyint(1) NOT NULL COMMENT 'True es blog, false es FAQ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `contenido`, `autor`, `publicacion_fecha`, `tipo`) VALUES
(14, '¿Qué tipo de restaurantes gestionan?', 'Operamos una variedad de restaurantes que incluyen cocina internacional, local y especializada, como restaurantes de comida rápida, casual y gourmet. Cada restaurante tiene su propia temática y oferta culinaria.', '', '2024-11-27', 0),
(16, '¿Dónde están ubicados sus restaurantes?', 'Tenemos ubicaciones en diferentes ciudades. Puedes encontrar la ubicación más cercana utilizando el mapa en nuestra página web o buscando en la sección de \"Nuestras Ubicaciones\".', '', '2024-11-27', 0),
(17, '¿Ofrecen opciones vegetarianas o veganas?', 'Sí, muchos de nuestros restaurantes ofrecen opciones vegetarianas, veganas y para personas con intolerancias alimenticias. Puedes consultar los menús de cada restaurante para más detalles.', '', '2024-11-27', 0),
(18, '¿Puedo hacer reservaciones en sus restaurantes?', 'Sí, ofrecemos la opción de hacer reservaciones en línea para algunos de nuestros restaurantes a través de nuestra página web o llamando directamente al restaurante. Recomendamos hacer la reservación con antelación para garantizar disponibilidad.', '', '2024-11-27', 0),
(19, '¡Ofertas Especiales por el Buen Fin 2024!', '¡El Buen Fin ha llegado a Operadora OPEG! Este año, hemos preparado promociones y descuentos especiales para que tu negocio aproveche al máximo los servicios que ofrecemos. Durante este evento, tendrás la oportunidad de obtener descuentos exclusivos en nuestras consultorías gastronómica, de operación y financiera.\r\n\r\nSi tu restaurante o empresa necesita mejorar sus procesos, optimizar su operación o fortalecer su gestión financiera, ¡este es el momento ideal! Nuestro equipo de expertos estará listo para ayudarte a alcanzar tus objetivos con soluciones a la medida.\r\n\r\n¿Qué puedes esperar de nuestras ofertas?\r\n\r\nDescuentos en Consultoría: Obtén un porcentaje de descuento en nuestros paquetes de consultoría para mejorar el rendimiento de tu negocio.\r\nPlanes Especiales para Restaurantes: Si eres dueño de un restaurante, tenemos descuentos exclusivos para ti en nuestra consultoría gastronómica.\r\nConsultoría Financiera a Precios Increíbles: Aprovecha nuestras tarifas reducidas para optimizar la gestión financiera de tu negocio y maximizar tus ganancias.\r\n¡No dejes pasar esta oportunidad única! Visítanos y descubre cómo podemos ayudarte a transformar tu empresa.', 'Equipo OPEG', '2024-11-27', 1),
(20, 'Cómo Optimizar la Operación de tu Restaurante: Consejos Clave', 'Gestionar un restaurante exitoso va más allá de ofrecer una buena comida. La operación eficiente es la clave para mantener un flujo constante de clientes y maximizar las ganancias. En Operadora OPEG, sabemos que cada detalle cuenta, y por eso queremos compartir algunos consejos clave para optimizar la operación de tu restaurante.\r\n\r\n1. Mejora la gestión del personal El personal es uno de los pilares más importantes en cualquier restaurante. Es crucial mantener una comunicación efectiva y asegurarse de que cada miembro del equipo entienda su rol y responsabilidades. La formación continua y el manejo adecuado de los turnos puede aumentar la productividad y mejorar el ambiente de trabajo.\r\n\r\n2. Optimiza los costos de inventario Los costos de inventario son uno de los principales desafíos en la gestión de un restaurante. Controlar los niveles de existencias, reducir el desperdicio y realizar inventarios regulares ayudará a mejorar la rentabilidad. Además, es importante revisar las relaciones con proveedores para asegurarse de obtener los mejores precios.\r\n\r\n3. Implementa tecnología para la gestión La tecnología puede ser una gran aliada en la optimización de procesos. Desde sistemas de punto de venta (POS) hasta herramientas de gestión de reservas y pedidos en línea, utilizar la tecnología adecuada puede ahorrar tiempo y mejorar la experiencia del cliente.\r\n\r\n4. Fomenta la experiencia del cliente La calidad de la experiencia del cliente debe ser siempre una prioridad. Esto incluye no solo la comida, sino también el servicio, la atmósfera y la rapidez en el servicio. Escuchar a los clientes y adaptarse a sus necesidades puede hacer la diferencia entre un cliente recurrente y una oportunidad perdida.\r\n\r\n5. Revisa y ajusta los menús regularmente Tener un menú variado y bien equilibrado es esencial, pero también es importante ajustarlo según la temporada y las preferencias del cliente. Ofrecer platillos especiales o menús de temporada puede aumentar la demanda y mantener la oferta fresca.\r\n\r\nEn Operadora OPEG, ofrecemos consultoría especializada para ayudarte a implementar estos consejos y mucho más. Si deseas mejorar la operación de tu restaurante, no dudes en contactarnos para una consulta personalizada.', 'Equipo OPEG', '2024-11-27', 1),
(21, 'Tendencias Gastronómicas para el 2025: ¿Qué Nos Espera en la Cocina?', 'Cada año, la industria gastronómica se reinventa con nuevas tendencias que reflejan los cambios en las preferencias de los consumidores, el acceso a nuevas tecnologías y un enfoque más sostenible hacia la alimentación. Como restaurador, es importante mantenerse al tanto de estas tendencias para ofrecer lo último a tus comensales. A continuación, te compartimos algunas de las principales tendencias gastronómicas para el 2025:\r\n\r\n1. Cocina Plant-Based: El Futuro Está en las Plantas\r\nLa comida basada en plantas sigue ganando terreno. Desde hamburguesas vegetales hasta lácteos veganos, los comensales están cada vez más interesados en alternativas a los productos de origen animal. El 2025 verá una expansión aún mayor de opciones plant-based, tanto para veganos como para quienes buscan reducir su consumo de carne.\r\n\r\n2. Sostenibilidad y Menús de Kilómetro Cero\r\nLos consumidores están cada vez más interesados en conocer el origen de los alimentos que consumen. Los restaurantes que promuevan la sostenibilidad y ofrezcan ingredientes locales, de temporada y de comercio justo, atraerán a un público consciente del medio ambiente. La tendencia de \"kilómetro cero\" está creciendo y se espera que más restaurantes adopten prácticas sostenibles.\r\n\r\n3. Tecnología en la Cocina: Innovaciones que Mejoran la Experiencia\r\nEl uso de la tecnología en la cocina no es algo nuevo, pero en 2025 veremos una integración aún más profunda. Desde la automatización en la preparación de alimentos hasta el uso de inteligencia artificial para predecir las preferencias del cliente, la tecnología está aquí para quedarse. Los chefs podrán ofrecer experiencias más personalizadas y precisas, todo gracias a las herramientas digitales.\r\n\r\n4. Comida Saludable y Funcional\r\nEl interés por la comida saludable continúa en aumento, con una mayor demanda de platillos que no solo sean nutritivos, sino que también ofrezcan beneficios funcionales. Esto incluye ingredientes que mejoran el sistema inmune, mejoran el estado de ánimo y aportan energía. Ofrecer opciones saludables y sabrosas será crucial en los menús del futuro.', 'Equipo OPEG', '2024-11-27', 1),
(22, 'Cómo Mejorar la Experiencia del Cliente en tu Restaurante', 'La experiencia del cliente es fundamental para cualquier negocio, especialmente en el sector de la restauración. Ofrecer un excelente servicio no solo depende de la comida, sino también de la atención al cliente, el ambiente y la forma en que los clientes se sienten desde que entran por la puerta hasta que se van. Aquí te damos algunos consejos para mejorar la experiencia del cliente en tu restaurante:\r\n\r\n1. Recibe a los Clientes con una Sonrisa\r\nEl primer contacto con los clientes es crucial. Una sonrisa genuina y un saludo cálido pueden marcar la diferencia entre una visita promedio y una experiencia memorable. La primera impresión es importante, por lo que cada miembro del personal debe estar preparado para recibir a los comensales de forma amigable y profesional.\r\n\r\n2. Ofrece un Servicio Rápido y Eficiente\r\nNadie disfruta esperar demasiado por su comida. Asegúrate de que tu personal sea eficiente y organizado. Desde el momento en que los clientes se sientan hasta el momento en que reciban su comida, todo debe ser rápido y fluido, sin comprometer la calidad del servicio.\r\n\r\n3. Personaliza la Experiencia\r\nLos clientes aprecian cuando sienten que el restaurante los valora como individuos. Tómate un momento para preguntarles sobre sus preferencias y recomendaciones. Ofrecer opciones personalizadas, como platos adaptados a sus necesidades dietéticas, es una excelente manera de mostrar que te importa su experiencia.\r\n\r\n4. Cuida el Ambiente del Restaurante\r\nEl ambiente juega un papel crucial en la experiencia del cliente. Asegúrate de que el espacio esté limpio, bien iluminado y agradable. La música, la decoración y la temperatura también son factores importantes que influyen en la percepción que los comensales tienen de tu restaurante. Un ambiente cómodo y atractivo puede hacer que los clientes se queden más tiempo y disfruten más de su experiencia.\r\n\r\n5. Solicita Feedback y Hazlo Mejor\r\nLa retroalimentación es una herramienta invaluable. Pregunta a tus clientes cómo fue su experiencia y si hay algo que crees que podrías mejorar. Esta información te permitirá seguir creciendo y brindando un servicio aún mejor.', 'Equipo OPEG', '2024-11-27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `nombre_cliente` varchar(50) NOT NULL,
  `nombre_restaurante` varchar(100) NOT NULL,
  `numero_telefono` int(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logininfo`
--

CREATE TABLE `logininfo` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logininfo`
--

INSERT INTO `logininfo` (`id`, `usuario`, `contrasenia`) VALUES
(1, 'admin', '$2y$10$LB1IFEEelATFHN/MV900pOwfu395umBg1IRykChhu3NlsbkfGLkLK'),
(2, 'test', '$2y$10$C4L2JIaK4rgj8vtuhbc0s.OU6c/7JTFTTR6LH0jjushaSNP3VTbEy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
