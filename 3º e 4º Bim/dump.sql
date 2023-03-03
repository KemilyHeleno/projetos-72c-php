--
-- PostgreSQL database dump
--

CREATE TABLE public.cliente (
    cod_cliente integer NOT NULL,
    nome character varying(60),
    email character varying(60),
    senha character(32),
    excluido character varying(1)
);


ALTER TABLE public.cliente OWNER TO "72c";

--
-- Name: cliente_cod_cliente_seq; Type: SEQUENCE; Schema: public; Owner: 72c
--

CREATE SEQUENCE public.cliente_cod_cliente_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cliente_cod_cliente_seq OWNER TO "72c";

--
-- Name: cliente_cod_cliente_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: 72c
--

ALTER SEQUENCE public.cliente_cod_cliente_seq OWNED BY public.cliente.cod_cliente;


--
-- Name: cliente cod_cliente; Type: DEFAULT; Schema: public; Owner: 72c
--

ALTER TABLE ONLY public.cliente ALTER COLUMN cod_cliente SET DEFAULT nextval('public.cliente_cod_cliente_seq'::regclass);


--
-- PostgreSQL database dump complete
--