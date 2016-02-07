-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2016 at 08:26 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `beerhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `conekta`
--

CREATE TABLE `conekta` (
  `id` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `id_cargo` varchar(255) NOT NULL,
  `tipo_transaccion` varchar(255) NOT NULL,
  `metodo_pago` varchar(255) NOT NULL,
  `estatus` varchar(255) NOT NULL,
  `mensaje_error` varchar(255) NOT NULL,
  `codigo_falla` varchar(255) NOT NULL,
  `codigo_antifraude` varchar(255) NOT NULL,
  `monto_cargo` varchar(255) NOT NULL,
  `comision` varchar(255) NOT NULL,
  `monto_deposito` varchar(255) NOT NULL,
  `moneda` varchar(255) NOT NULL,
  `cantidad_original` varchar(255) NOT NULL,
  `moneda_original` varchar(255) NOT NULL,
  `tipo_cambio` varchar(255) NOT NULL,
  `id_referencia` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `nombre_tarjetahabiente` varchar(255) NOT NULL,
  `numero_tarjeta` varchar(255) NOT NULL,
  `banco` varchar(255) NOT NULL,
  `marca_tarjeta` varchar(255) NOT NULL,
  `pais_tarjeta` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `tipo_tarjeta` varchar(255) NOT NULL,
  `pago_efectivo` varchar(255) NOT NULL,
  `sucursal` varchar(255) NOT NULL,
  `ip_ciudad` varchar(255) NOT NULL,
  `id_deposito` varchar(255) NOT NULL,
  `referencia_deposito` varchar(255) NOT NULL,
  `fecha_deposito` varchar(255) NOT NULL,
  `meses_sin_intereses` varchar(255) NOT NULL,
  `id_transaccion` varchar(255) NOT NULL,
  `id_recibo` varchar(255) NOT NULL,
  `livemode` varchar(255) NOT NULL,
  `checkout_id` varchar(255) NOT NULL,
  `decision_antifraude` varchar(255) NOT NULL,
  `decision_bancaria` varchar(255) NOT NULL,
  `reglas_antifraude_disparadas` text NOT NULL,
  `direccion_de_envio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stripe`
--

CREATE TABLE `stripe` (
  `id` int(11) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `amount` varchar(255) NOT NULL,
  `amount_refunded` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `converted_amount` varchar(255) NOT NULL,
  `converted_amount_refunded` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `converted_currency` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `statement_descriptor` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `customer_description` text NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `captured` varchar(255) NOT NULL,
  `card_id` varchar(255) NOT NULL,
  `card_last4` varchar(255) NOT NULL,
  `card_brand` varchar(255) NOT NULL,
  `card_funding` varchar(255) NOT NULL,
  `card_exp_month` varchar(255) NOT NULL,
  `card_exp_year` varchar(255) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_address_line1` varchar(255) NOT NULL,
  `card_address_line2` varchar(255) NOT NULL,
  `card_address_city` varchar(255) NOT NULL,
  `card_address_state` varchar(255) NOT NULL,
  `card_address_country` varchar(255) NOT NULL,
  `card_address_zip` varchar(255) NOT NULL,
  `card_issue_country` varchar(255) NOT NULL,
  `card_fingerprint` varchar(255) NOT NULL,
  `card_cvc_status` varchar(255) NOT NULL,
  `card_avs_zip_status` varchar(255) NOT NULL,
  `card_avs_line1_status` varchar(255) NOT NULL,
  `disputed_amount` varchar(255) NOT NULL,
  `dispute_status` varchar(255) NOT NULL,
  `dispute_reason` text NOT NULL,
  `dispute_date` datetime NOT NULL,
  `dispute_evidence_due` varchar(255) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `payment_source_type` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `transfer` varchar(255) NOT NULL,
  `address_metadata` text NOT NULL,
  `email_metadata` varchar(255) NOT NULL,
  `phone_metadata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conekta`
--
ALTER TABLE `conekta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe`
--
ALTER TABLE `stripe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conekta`
--
ALTER TABLE `conekta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stripe`
--
ALTER TABLE `stripe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;