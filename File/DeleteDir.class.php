<?php

/**
 * ɾ������Ŀ¼
 * ע�⣺�˺���ɾ��Ŀ¼�µ������ļ�������Ŀ¼����
 */
function delete_dir($dir) {
	//��ɾ��Ŀ¼�µ��ļ���
	$dh = opendir($dir);
	while($file = readdir($dh)) {
		if($file != "." && $file != "..") {
			$fullpath = $dir . "/" . $file;
			if(!is_dir($fullpath)) {
			  unlink($fullpath);
			} else {
			  delete_dir($fullpath);
			}
		}
	}

	closedir($dh);
	
	//ɾ����ǰ�ļ��У�
	if(rmdir($dir)) {
		return true;
	} else {
		return false;
	}
}
?>