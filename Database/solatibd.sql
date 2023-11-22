--
-- PostgreSQL database dump
--

-- Dumped from database version 16.1
-- Dumped by pg_dump version 16.1

-- Started on 2023-11-22 17:55:20

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4787 (class 1262 OID 16398)
-- Name: solatibd; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE solatibd WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';


ALTER DATABASE solatibd OWNER TO postgres;

\connect solatibd

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: pg_database_owner
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO pg_database_owner;

--
-- TOC entry 4788 (class 0 OID 0)
-- Dependencies: 4
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: pg_database_owner
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 216 (class 1259 OID 16400)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    usu_id integer NOT NULL,
    usu_cedula character varying(255),
    usu_correo character varying(50) NOT NULL,
    usu_nombre character varying(50) NOT NULL,
    usu_password text NOT NULL,
    rol_id integer NOT NULL,
    est_id integer NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 16399)
-- Name: usuario_usu_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_usu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuario_usu_id_seq OWNER TO postgres;

--
-- TOC entry 4789 (class 0 OID 0)
-- Dependencies: 215
-- Name: usuario_usu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_usu_id_seq OWNED BY public.usuario.usu_id;


--
-- TOC entry 4634 (class 2604 OID 16403)
-- Name: usuario usu_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario ALTER COLUMN usu_id SET DEFAULT nextval('public.usuario_usu_id_seq'::regclass);


--
-- TOC entry 4781 (class 0 OID 16400)
-- Dependencies: 216
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuario (usu_id, usu_cedula, usu_correo, usu_nombre, usu_password, rol_id, est_id) FROM stdin;
2	1143879187	test@test.com	Argemiro Ermitage	4cuxs7nCUchVE	1	7
\.


--
-- TOC entry 4790 (class 0 OID 0)
-- Dependencies: 215
-- Name: usuario_usu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_usu_id_seq', 1, false);


--
-- TOC entry 4636 (class 2606 OID 16407)
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (usu_id);


-- Completed on 2023-11-22 17:55:21

--
-- PostgreSQL database dump complete
--

