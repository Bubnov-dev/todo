PGDMP     (    7                x            todo    12.4    12.4                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                        1262    24585    todo    DATABASE     �   CREATE DATABASE todo WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Russian_Russia.1251' LC_CTYPE = 'Russian_Russia.1251';
    DROP DATABASE todo;
                postgres    false            �            1259    24610    schedule    TABLE     V   CREATE TABLE public.schedule (
    schedule text NOT NULL,
    login text NOT NULL
);
    DROP TABLE public.schedule;
       public         heap    postgres    false            �            1259    24618 	   subjectok    TABLE     i   CREATE TABLE public.subjectok (
    subject text NOT NULL,
    schedule text NOT NULL,
    cloud text
);
    DROP TABLE public.subjectok;
       public         heap    postgres    false            �            1259    24631    task    TABLE     �   CREATE TABLE public.task (
    task text NOT NULL,
    subject text NOT NULL,
    deadline text NOT NULL,
    description text NOT NULL
);
    DROP TABLE public.task;
       public         heap    postgres    false            �            1259    24586    userok    TABLE     T   CREATE TABLE public.userok (
    login text NOT NULL,
    password text NOT NULL
);
    DROP TABLE public.userok;
       public         heap    postgres    false                      0    24610    schedule 
   TABLE DATA           3   COPY public.schedule (schedule, login) FROM stdin;
    public          postgres    false    203                    0    24618 	   subjectok 
   TABLE DATA           =   COPY public.subjectok (subject, schedule, cloud) FROM stdin;
    public          postgres    false    204   G                 0    24631    task 
   TABLE DATA           D   COPY public.task (task, subject, deadline, description) FROM stdin;
    public          postgres    false    205   �                 0    24586    userok 
   TABLE DATA           1   COPY public.userok (login, password) FROM stdin;
    public          postgres    false    202   �       �
           2606    24617    schedule schedule_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.schedule
    ADD CONSTRAINT schedule_pkey PRIMARY KEY (schedule);
 @   ALTER TABLE ONLY public.schedule DROP CONSTRAINT schedule_pkey;
       public            postgres    false    203            �
           2606    24625    subjectok subject_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.subjectok
    ADD CONSTRAINT subject_pkey PRIMARY KEY (subject);
 @   ALTER TABLE ONLY public.subjectok DROP CONSTRAINT subject_pkey;
       public            postgres    false    204            �
           2606    24638    task task_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.task
    ADD CONSTRAINT task_pkey PRIMARY KEY (task);
 8   ALTER TABLE ONLY public.task DROP CONSTRAINT task_pkey;
       public            postgres    false    205            �
           2606    24645    userok user_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.userok
    ADD CONSTRAINT user_pkey PRIMARY KEY (login);
 :   ALTER TABLE ONLY public.userok DROP CONSTRAINT user_pkey;
       public            postgres    false    202            �
           1259    24656    fki_sch name    INDEX     H   CREATE INDEX "fki_sch name" ON public.subjectok USING btree (schedule);
 "   DROP INDEX public."fki_sch name";
       public            postgres    false    204            �
           2606    24657    subjectok newFK    FK CONSTRAINT     z   ALTER TABLE ONLY public.subjectok
    ADD CONSTRAINT "newFK" FOREIGN KEY (schedule) REFERENCES public.schedule(schedule);
 ;   ALTER TABLE ONLY public.subjectok DROP CONSTRAINT "newFK";
       public          postgres    false    203    204    2704            �
           2606    24639 	   task subj    FK CONSTRAINT     q   ALTER TABLE ONLY public.task
    ADD CONSTRAINT subj FOREIGN KEY (subject) REFERENCES public.subjectok(subject);
 3   ALTER TABLE ONLY public.task DROP CONSTRAINT subj;
       public          postgres    false    2707    204    205            �
           2606    24646    schedule user    FK CONSTRAINT     p   ALTER TABLE ONLY public.schedule
    ADD CONSTRAINT "user" FOREIGN KEY (login) REFERENCES public.userok(login);
 9   ALTER TABLE ONLY public.schedule DROP CONSTRAINT "user";
       public          postgres    false    2702    202    203               3   x���urR��s�,N̫L��+�MJ-R()χ
d���sz�� �1z\\\ ��         S   x�KMI��+�MJ-R()����*����O�"��"�U\��řY��ϙ���B�Y�@ĕ�ZL.�'�䗦p��qqq �,�         2   x�+I,��K�M�LMI�,�OI��LI-N��K-�q�p� ՠ���qqq �O         Y   x�+N̫L�4200����2=����=<#��A2�Ɯ��E%�\~��
�ũE������E)\����I�)�`�PIjq	�"##�=... �Z"W     