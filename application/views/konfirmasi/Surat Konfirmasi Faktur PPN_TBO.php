<?php
header("Content-Type: application/ms-word");
header("Content-Disposition: attachment; filename=".$nama_file_doc.".doc");
header("Pragma: no-cache");
header("Expires: 0");

$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

$bulan_ini = $bulan[(int)date("m")];

foreach($surat as $s){
	$wp         = $s->nama_wp;
	$npwp       = $s->npwp;
	$alamat1    = $s->alamat1;
	$alamat2    = $s->alamat2;
	$alamat3    = $s->alamat3;
	$ar         = $s->ar;
	$asal_surat = $s->asal_surat;
	$no_surat   = $s->no_surat;
	$tgl_surat  = $s->tgl_surat;
	$tgl_surat1 = explode("-", $tgl_surat);
	$tgl_surat2 = $tgl_surat1[2]." ".$bulan[(int)$tgl_surat1[1]]." ".$tgl_surat1[0];
	$masa_pajak = $s->masa_pajak;
	$masa1  = substr($masa_pajak,0,2);
	$masa2  = substr($masa_pajak,5,2);
	$tahun1 = substr($masa_pajak,2,2);
	$tahun2 = substr($masa_pajak,7,2);
	$masa_pajak2 = $bulan[(int)$masa1]." 20".$tahun1." - ".$bulan[(int)$masa2]." 20".$tahun2;
	
}
?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="Surat%20Konfirmasi%20Faktur%20PPN_files/filelist.xml">
<link rel=Edit-Time-Data
href="Surat%20Konfirmasi%20Faktur%20PPN_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>060104044</o:Author>
  <o:LastAuthor>060104044</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>30</o:TotalTime>
  <o:LastPrinted>2019-06-19T04:10:00Z</o:LastPrinted>
  <o:Created>2019-06-19T04:18:00Z</o:Created>
  <o:LastSaved>2019-06-19T04:18:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>327</o:Words>
  <o:Characters>1867</o:Characters>
  <o:Company> </o:Company>
  <o:Lines>15</o:Lines>
  <o:Paragraphs>4</o:Paragraphs>
  <o:CharactersWithSpaces>2190</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData
href="Surat%20Konfirmasi%20Faktur%20PPN_files/themedata.thmx">
<link rel=colorSchemeMapping
href="Surat%20Konfirmasi%20Faktur%20PPN_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="0" Name="Hyperlink"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Arial;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520092929 1073786111 9 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-font-kerning:.5pt;}
a:link, span.MsoHyperlink
	{mso-style-unhide:no;
	mso-style-parent:"";
	color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:purple;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:none;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-font-kerning:.5pt;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:none;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-font-kerning:.5pt;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:none;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-font-kerning:.5pt;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:none;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-font-kerning:.5pt;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;}
@page WordSection1
	{size:612.1pt 936.1pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:752048962;
	mso-list-type:hybrid;
	mso-list-template-ids:-2104858588 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1
	{mso-list-id:1937329311;
	mso-list-type:hybrid;
	mso-list-template-ids:1205077480 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l1:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Arial","sans-serif";
	mso-bidi-font-family:"Times New Roman";}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:59;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri","sans-serif";
	mso-bidi-font-family:"Times New Roman";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1028"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US link=blue vlink=purple style='tab-interval:36.0pt'>

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="Picture_x0020_1" o:spid="_x0000_s1027" type="#_x0000_t75"
 style='position:absolute;left:0;text-align:left;margin-left:.75pt;
 margin-top:3.35pt;width:72.45pt;height:71.3pt;z-index:251659264;visibility:visible;
 mso-wrap-style:square;mso-width-percent:0;mso-height-percent:0;
 mso-wrap-distance-left:9.05pt;mso-wrap-distance-top:0;
 mso-wrap-distance-right:9.05pt;mso-wrap-distance-bottom:0;
 mso-position-horizontal:absolute;mso-position-horizontal-relative:text;
 mso-position-vertical:absolute;mso-position-vertical-relative:text;
 mso-width-percent:0;mso-height-percent:0;mso-width-relative:page;
 mso-height-relative:page' filled="t">
 <v:imagedata src="F:/server2go/htdocs/konfirmasi/application/views/konfirmasi/KEMENKEU.PNG"
  o:title=""/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:251659264;left:0px;margin-left:1px;margin-top:5px;width:97px;
height:95px'><img width=97 height=95
src="Surat%20Konfirmasi%20Faktur%20PPN_files/image002.png" v:shapes="Picture_x0020_1"></span><![endif]><b
style='mso-bidi-font-weight:normal'><span style='font-size:13.0pt;font-family:
"Arial","sans-serif"'>KEMENTERIAN KEUANGAN REPUBLIK INDONESIA<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;font-family:
"Arial","sans-serif"'>DIREKTORAT JENDERAL PAJAK<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;font-family:
"Arial","sans-serif"'>KANTOR WILAYAH DJP JAWA TENGAH II<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:13.0pt;font-family:
"Arial","sans-serif"'>KANTOR PELAYANAN PAJAK PRATAMA SURAKARTA<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><span
style='font-size:7.0pt;font-family:"Arial","sans-serif"'>JALAN K.H. AGUS SALIM
NO.1 SURAKARTA 57147<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><span
style='font-size:7.0pt;font-family:"Arial","sans-serif"'>TELEPON (0271) 718246;
FAKSIMILE (0271) 728436; SITUS </span><span style='font-family:"Arial","sans-serif"'><a
href="http://www.pajak.go.id"><span class=SpellE><span style='font-size:7.0pt'>www.pajak.go.id</span></span></a></span><u><span
style='font-size:7.0pt;font-family:"Arial","sans-serif"'><o:p></o:p></span></u></p>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><span
style='font-size:7.0pt;font-family:"Arial","sans-serif"'>LAYANAN INFORMASI DAN
KELUHAN KRING PAJAK (021) 500200<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-left:49.5pt;text-align:center'><span
style='font-size:7.0pt;font-family:"Arial","sans-serif"'>EMAIL </span><span
style='font-family:"Arial","sans-serif"'><a href="mailto:pengaduan@pajak.go.id"><span
class=SpellE><span style='font-size:7.0pt'>pengaduan@pajak.go.id</span></span></a></span><span
style='font-size:7.0pt;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;tab-stops:353.25pt'><span
style='font-size:2.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<div style='mso-element:para-border-div;border:none;border-top:double windowtext 1.5pt;
padding:1.0pt 0cm 0cm 0cm'>

<p class=MsoNormal align=center style='text-align:center;tab-stops:353.25pt;
border:none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm;mso-padding-alt:
1.0pt 0cm 0cm 0cm'><span style='font-size:5.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

</div>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=63 valign=top style='width:47.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Nomor<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:14.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=255 valign=top style='width:191.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>S-<span
  style='mso-spacerun:yes'><span style='mso-tab-count:1'></span></span>/WPJ.32/KP.06/2019<o:p></o:p></span></p>
  </td>
  <td width=132 valign=top style='width:99.2pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 valign=top style='width:126.1pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><?=$bulan_ini;?>
  2019<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=63 valign=top style='width:47.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Sifat<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:14.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=255 valign=top style='width:191.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Segera<o:p></o:p></span></p>
  </td>
  <td width=132 valign=top style='width:99.2pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 valign=top style='width:126.1pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=63 valign=top style='width:47.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Hal<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:14.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=255 valign=top style='width:191.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Permintaan
  Pertanggungjawaban Faktur Pajak Keluaran <o:p></o:p></span></p>
  </td>
  <td width=132 valign=top style='width:99.2pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 valign=top style='width:126.1pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Yth.
Direktur <b style='mso-bidi-font-weight:normal'><?=$wp;?></b><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>NPWP
<?=$npwp;?><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><?=$alamat1;?><o:p></o:p></span></p>

<p class=MsoNormal><span class=SpellE><?=$alamat2;?><o:p></o:p></span></p>

<p class=MsoNormal><span class=SpellE><span style='font-size:11.0pt;font-family:
"Arial","sans-serif"'><?=$alamat3;?></span></span><span style='font-size:11.0pt;
font-family:"Arial","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:11.0pt;
font-family:"Arial","sans-serif"'><span style='mso-tab-count:1'></span>Berdasarkan
permintaan klarifikasi data pajak keluaran dari <?=$asal_surat;?> Nomor <?=$no_surat;?> tanggal <?=$tgl_surat2;?>, dengan ini diberitahukan bahwa : <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-indent:-21.3pt;mso-list:l1 level1 lfo1'><![if !supportLists]><span
style='font-size:11.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Setelah
diteliti pada daftar Pajak Keluaran masa pajak <?=$masa_pajak2;?>,
ternyata faktur pajak di bawah ini <b style='mso-bidi-font-weight:normal'>belum
Saudara laporkan</b> :<o:p></o:p></span></p>


<?php
echo "<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=624
 style='width:467.8pt;margin-left:5.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>";
echo "<thead>";
echo "<tr>";
echo "<th rowspan='2'>No</th>";
echo "<th colspan='2'>Faktur Pajak</th>";
echo "<th rowspan='2'>Nama / NPWP PKP Pembeli</th>";
echo "<th rowspan='2'>Jumlah PPN</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Nomor</th>";
echo "<th width='20'>Tanggal</th>";
echo "</tr>";
echo "</thead>";

$nomor  = 1;
$jumlah = 0;
$tgl_fak_bp = "";

foreach($detail as $r){
	echo "<tbody><tr style='border: 1px solid black'>";
	echo "<td align='center'>".$nomor."</td>";
	echo "<td align='left'>".$r->no_fak_bp."</td>";
	$tgl_fak_bp_id = explode("-",$r->tgl_fak_bp);
	$tgl_fak_bp_id2 = $tgl_fak_bp_id[2]."/".$tgl_fak_bp_id[1]."/".$tgl_fak_bp_id[0];
	echo "<td align='center'>".$tgl_fak_bp_id2."</td>";
	echo "<td align='center'>".$r->nm_wp_surat."/".$r->npwp_surat."</td>";
	echo "<td align='right'>".number_format($r->nilai,0,',','.')."</td>";
	echo "</tbody>";
	$nomor++;
	$jumlah += $r->nilai;
}
echo "<tr><td></td><td colspan='3' align='center'><b>Jumlah</b></td><td align='right'><b>".number_format($jumlah,0,',','.')."</b></td></tr>";
echo "</table>";
?>




<p class=MsoListParagraphCxSpFirst style='margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-indent:-21.3pt'><span style='font-size:11.0pt;
font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-indent:-21.3pt;mso-list:l1 level1 lfo1'><![if !supportLists]><span
style='font-size:11.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Diminta
segera memberikan klarifikasi kepada kami dengan menyertakan arsip pelaporan
SPT Masa PPN beserta lampirannya paling lambat 7 (tujuh) hari setelah surat ini
diterima;<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-indent:-21.3pt;mso-list:l1 level1 lfo1'><![if !supportLists]><span
style='font-size:11.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Apabila
pada butir 2 (dua) di atas tidak Saudara <span class=SpellE>pertanggungjawabkan</span>
maka akan diterbitkan SKP sesuai dengan Undang-undang No 6 Tahun 1983
sebagaimana telah diubah terakhir dengan Undang-undang No 28 Tahun 2007.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'>Kami
mengharapkan dan menghargai peran aktif Saudara dalam pelaksanaan kewajiban
perpajakan sesuai dengan ketentuan yang berlaku. Untuk memberikan pelayanan
terbaik kepada Wajib Pajak dan menciptakan aparatur yang bersih, kami tegaskan
kembali bahwa semua pelayanan di KPP <span class=SpellE>Pratama</span>
Surakarta tidak dipungut biaya. Apabila Saudara memerlukan informasi/penjelasan
lebih lanjut, kami persilahkan menghubungi <i style='mso-bidi-font-style:normal'>Account
Representative (AR)</i> Saudara.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><span
style='mso-tab-count:1'></span>Demikian atas perhatian Saudara,
kami ucapkan terima kasih.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify;tab-stops:326.05pt'><span style='font-size:11.0pt;
font-family:"Arial","sans-serif"'><span style='mso-tab-count:1'></span>Kepala
Kantor,<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify;tab-stops:326.05pt'><span style='font-size:11.0pt;
font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify;tab-stops:326.05pt'><span style='font-size:11.0pt;
font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-size:11.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify;tab-stops:326.05pt'><span style='font-size:11.0pt;
font-family:"Arial","sans-serif"'><span style='mso-tab-count:1'></span><span
class=SpellE>Eko</span> Budi <span class=SpellE>Setyono</span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></p>


</div>

</body>

</html>
