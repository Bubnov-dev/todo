PGDMP         .             
    x            postgres    13.0    13.0     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    13442    postgres    DATABASE     e   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE postgres;
                postgres    false            �          0    32816    schedule 
   TABLE DATA           3   COPY public.schedule (schedule, login) FROM stdin;
    public          postgres    false    201   T       �          0    32822 	   subjectok 
   TABLE DATA           K   COPY public.subjectok (subject, schedule, cloud, days, "time") FROM stdin;
    public          postgres    false    202   �       �          0    32828    task 
   TABLE DATA           Q   COPY public.task (task, subject, description, deadline, "time", img) FROM stdin;
    public          postgres    false    203   r       �          0    32834    userok 
   TABLE DATA           1   COPY public.userok (login, password) FROM stdin;
    public          postgres    false    204   �       �   :   x���urR��s�,N̫L��+�MJ-R()χ
d���sz�� ����)Pv� ���      �   �   x��QM
�@]Ϝ����q�D�0!GZ�P���"� Az�77j�V�|���~x�ljn�+t�9�1G���������q
Q��V�"R�(T:.�f��|�+Q�����O�Jb.L3�m5�.L6��.���Z"�i�=��$:��˷�NVLQ���);:���\<�4�}�w4�a�������H)�Z���      �   5  x���QJ�@���S,}Lv7���
�'�K���E&}+	R����h�4��̍�M�nQ��0���|���;�PB�s�X�t���е�XCn8����82z�tLX�{�>R{����$_�BCr	��_/���kC���N��Dn�)��O��S�5�8"��S�T���43g��l�5��I͉o��5�ZMC�����K��ƙ�юJ0�,��b��p�x���a�൝���z�u�HOYZ��I�q�$QpO�|�u�i<��G#;���a�P���u�<���s9���Q8<�{w�=��f�6M��w;      �   Y   x�+N̫L�4200����2=����=<#��A2�Ɯ��E%�\~��
�ũE������E)\����I�)�`�PIjq	�"##�=... �Z"W     