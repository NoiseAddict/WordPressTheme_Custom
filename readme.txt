/*------------------------------------------------------------------------------
	PHP�̕�����Ȃ����S�Ҍ����t���[WordPress�e�[�}�wmypace custom�x
	by Kei Nomura(@mypadecreator) / ozone notes
	http://mypacecreator.net/theme/
-------------------------------------------------------------------------------*/

/*  ���񑩎�
-------------------------------------------------------------*/

�����C�Z���X�́AWorePress�{�̂Ɠ���GPL���C�Z���X��K�p���܂��B���͈͓̔��ŏ��p�E�񏤗p�ɂ�����炸�����Ŏ��R�ɉ��ρE�������Ă����p���������܂��B
�iWordPress�̃e�[�}���C�Z���X�ɂ��ẮA��҃u���O�w����WordPress�e�[�}�̃��C�Z���X�ɂ��Ē��ׂĂ݂� | �}�C�y�[�X�N���G�C�^�[�̊o�������x������ǂ��������B�j
�����쌠�\�L��style.css��footer.php�ɋL�ڂ��Ă���܂��B�ǂ�����c���Ă���������΍K���ł����A��L�̃��[�����������藝�����������ŁA�����Ǝ����Ŏ�����������̂ɑ΂��Ď��̖��O�������Ə����Ă����������ɂ́A�\��Ȃ����Ǝv���܂��B�ň�style.css�̕\�L���炢�c���Ă��炦���OK�ł��B
�����܂��J�X�^�}�C�Y�ł����������A�t�ɂ����܂Â������ǂ����������o�����A���̏��͂ł��邾���u���O��\�[�V�������f�B�A����UP���Ă݂�Ȃŋ��L���܂��傤�B
�����₪����Ύ󂯂����Ǝv���܂����A�d���̍��ԂɗL�u�ōs���Ă��܂��̂ŁA�o����͈͂ł̑Ή��ƂȂ�܂��B
���ł��A���[���邳��⏑�ЂȂǂ���g���ĂȂ�ׂ������Œ��ׂĂ��������B�����ŋ�J���Ȃ��璲�ׂ邱�Ƃ���B�ւ̋ߓ��ł��B
���ꍏ�������񓚂������T�|�[�g�������߂̕��́A�L���T�|�[�g�iozone notes http://www.ozonenotes.jp/ )�܂ł��A�����������B


/*  �t�@�C���\���iXHTML�ŁFmypace custom 1.6�j
-------------------------------------------------------------*/
*��͂��̃e�[�}�ł̕K�v�Œ���̃t�@�C�� ����͂Ȃ��Ă��ꉞ�����t�@�C��
style.css*
default.css* �i���������g���Ă��郊�Z�b�gCSS�Ƃ悭�g���N���X�Ȃǂ��܂Ƃ߂Ă���j
archieve.php 
header.php* �iDTD��xhtml1.0 transitional�ł��j
index.php*
home.php
loop.php*
footer.php*
sidebar.php*
page.php
pagetemplate.php
comments.php
single.php
404.php
functions.php
screenshot.png
img/blog_top.jpg


/*  ���o�[�W�����ł̕ύX�ӏ��iXHTML�ŁFmypace custom 1.6�j
-------------------------------------------------------------*/
�Ebloginfo('url')�^�O�@���@echo home_url()�ɍ����ւ�
�Ebloginfo('template_url')�^�O�@���@echo get_template_directory_uri()�ɍ����ւ�
�Ehead�v�f��lang�w���<?php language_attributes(); ?>�^�O�ɍ����ւ�
�E���e�\��������<?php the_ID(); ?><?php post_class(); ?>��ǉ�
�E�E�B�W�F�b�g����4�ɕύX�A�e�E�B�W�F�b�g�ɖ��O��ݒ�
�Efunctions.php��$content_width�i�R���e���c���j��`��ǉ�
�Efunctions.php��add_editor_style('editor-style.css');��ǉ�
�Efunctions.php��add_theme_support('custom-header');��ǉ�
�Efunctions.php��add_theme_support('automatic-feed-links');��ǉ�
�Efunctions.php��add_custom_background();��add_theme_support( 'custom-background' );�ɕύX
�E�ȉ��̃t�@�C����<?php get_header(); ?>��̃R�����g�i<!-- *****.php start -->�j���폜�iIE�̌���݊��������̂��߁j�mindex.php/archive.php/header.php/home.php/page.php/pagetemplate.php/single.php/404.php�n
�E�y�[�W�^�C�g���̏o�̓R�[�h��loop.php����index.php/archive.php���ֈړ�
�Esingle.php���@���̃y�[�W�^�O�̃y�[�W�ւ̃e�L�X�g�����N���A���e�̉����݂̂ɕύX
�Ecomments.php���@�R�����g�\��������<?php comment_class(); ?>��ǉ�



/*  �ߋ��̕ύX�����iXHTML�ŁFmypace custom 1.6�j
-------------------------------------------------------------*/
�E2010.10.15�@���������Ŏ���e�[�}���J
�E2010.10.16�@���C�Z���X�Ɋւ���L�q���C��
�E2010.10.17�@comment.php���ʂ̃e�[�}�̂��̂������Ƃ����v���I�ȃ~�X�̂��߁A�f�[�^�����ւ��B���̑�CSS�𒲐���������Ver 1.01�Ƀ}�C�i�[�A�b�v�B
�E2010.11.08�@Ver1.1�ɍ����ւ��Bfooter.php��Copyright�����̏C���ƁAloop.php/sidebar.php�ɕ⑫�R�����g�ǉ��Alicense.txt�ǉ��B
�E2010.11.11�@Ver1.1��sidebar.php�ɃR�[�f�B���O�~�X������A�C�����܂����B������Ver1.101�Ȋ����ł����A���̂܂�Ver1.1�ɏ㏑�������Ⴂ�܂����B
�E2010.11.18�@Ver1.2�ɍ����ւ��Bstyle.css���A.pagelink {overflow: hidden;��overflow: auto;�ɕύX�i�y�[�W�����̃e�L�X�g�����N�������Ȃ��Ȃ����Ⴄ����j�̑��A���������C���B��PHP�t�@�C�����������ɃR�����g�ǉ��B
�E2010.12.12�@Ver1.3�ɍ����ւ��B<!--paged-->���g�����y�[�W�����g�p���ɁA�y�[�W����p�̃����N��\��������^�O�fwp_link_pages�f��ǋL
�E2010.12.13�@�c�����NVer�́fmypace custom vertical�@1.0���z�z�J�n
�E2010.12.14�@�uarchive.php�����������������v�Ƃ����M�d�Ȃ��ӌ������������AVer1.4�Əc�����N��Ver1.1�̔z�z�J�n�B�����ɁA�s�v�\�[�X�̍폜��R�����g�̈ꕔ�C�����B
�E2011.04.30�@���e�[�}��HTML5�Ń}�[�N�A�b�v���������hmypace custom V�h�������[�X���܂����B
�E2011.07.25�@Ver1.5�z�z�J�n�Bfunctions.php�ɁA�u������ǂށv�N���b�N���URL����#more-$id ���폜����L�q��ǉ��B�R���e���c����800px��960px�ɕύX�B�ق��A�}�[�N�A�b�v��CSS�����̒����B
�E2012.06.15�@Ver1.6�z�z�J�n�BWordPress3.4�̊֐������󋵂𓥂܂��A�L�q���������ύX�B�G�f�B�^�pCSS�A�J�X�^���w�b�_�[�@�\��������ǉ��B�ȂǁB


�ł́I�ǂ�WordPress���C�t����