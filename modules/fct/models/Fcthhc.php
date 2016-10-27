<?php

namespace app\modules\fct\models;

use Yii;

/**
 * This is the model class for table "fcthhc".
 *
 * @property integer $id
 * @property string $fct_id
 * @property string $fctdate
 * @property string $home
 * @property string $homept
 * @property string $t
 * @property string $pr
 * @property string $rr
 * @property string $bp
 * @property string $feel
 * @property string $eat
 * @property string $stool
 * @property string $urin
 * @property string $commu
 * @property string $mental
 * @property string $self
 * @property string $lesion
 * @property string $fall
 * @property string $sore
 * @property string $heart
 * @property string $hearta
 * @property string $heartnote
 * @property string $social
 * @property string $sociala
 * @property string $socialnote
 * @property string $bored
 * @property string $borednote
 * @property string $depress
 * @property string $depressnote
 * @property string $foley
 * @property string $foleynote
 * @property string $ng
 * @property string $ngnote
 * @property string $pcn
 * @property string $pcnnote
 * @property string $tra
 * @property string $tranote
 * @property string $wound
 * @property string $woundnote
 * @property string $insulin
 * @property string $insulinnote
 * @property string $windpipe
 * @property string $windpipenote
 * @property string $phy
 * @property string $phynote
 * @property string $pra
 * @property string $pranote
 * @property string $diet
 * @property string $dietnote
 * @property string $env
 * @property string $envnote
 * @property string $ser
 * @property string $sernote
 * @property string $comp
 * @property string $compnote
 * @property string $timeu
 * @property string $times
 * @property string $datenext
 * @property string $other
 * @property string $other2
 * @property string $datedc
 * @property string $notefct
 * @property string $tr01
 * @property string $tr02
 * @property string $tr03
 * @property string $deg04
 * @property string $deg15
 * @property string $deg14
 * @property string $deg13
 * @property string $deg12
 * @property string $deg11
 * @property string $deg10
 * @property string $deg09
 * @property string $deg08
 * @property string $deg07
 * @property string $deg06
 * @property string $deg05
 * @property string $deg03
 * @property string $deg02
 * @property string $deg01
 * @property string $tr15
 * @property string $tr14
 * @property string $tr13
 * @property string $tr12
 * @property string $tr11
 * @property string $tr10
 * @property string $tr09
 * @property string $tr08
 * @property string $tr07
 * @property string $tr06
 * @property string $tr05
 * @property string $tr04
 * @property string $fctname1
 * @property string $fctname2
 * @property string $fctname3
 * @property string $fctname4
 * @property string $fctname5
 * @property string $fctname6
 * @property string $departfct
 * @property string $lr01
 * @property string $lr02
 * @property string $lr03
 * @property string $lr04
 * @property string $lr05
 * @property string $lr06
 * @property string $lr07
 * @property string $lr08
 * @property string $lr09
 * @property string $lr10
 * @property string $lrl01
 * @property string $lrl02
 * @property string $lrl03
 * @property string $lrl04
 * @property string $lrl05
 * @property string $lrl06
 * @property string $lrl07
 * @property string $lrl08
 * @property string $lr
 * @property string $lrl10
 * @property string $lrl11
 * @property string $lrl09
 * @property string $cid
 * @property string $status
 * @property integer $fcthosin_id
 */
class Fcthhc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fcthhc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fctdate', 'datenext', 'datedc'], 'safe'],
            [['status'], 'string'],
            [['fcthosin_id'], 'integer'],
            [['fct_id'], 'string', 'max' => 11],
            [['home', 'timeu'], 'string', 'max' => 2],
            [['homept', 'eat'], 'string', 'max' => 50],
            [['t', 'pr', 'rr'], 'string', 'max' => 5],
            [['bp'], 'string', 'max' => 7],
            [['feel', 'self', 'sore', 'fctname1', 'fctname2', 'fctname3', 'fctname4', 'fctname5'], 'string', 'max' => 20],
            [['stool', 'urin', 'commu', 'lesion', 'insulin'], 'string', 'max' => 15],
            [['mental', 'fall', 'heart', 'social', 'bored', 'depress', 'foley', 'ng', 'pcn', 'tra', 'wound', 'windpipe', 'phy', 'pra', 'diet', 'env', 'ser', 'comp', 'times', 'deg10', 'lr07', 'lr08', 'lr09', 'lr10', 'lrl02', 'lrl03', 'lrl04', 'lrl05', 'lrl06', 'lrl07', 'lrl10', 'lrl11'], 'string', 'max' => 10],
            [['hearta', 'heartnote', 'sociala', 'socialnote', 'other2', 'deg04', 'deg15', 'deg14', 'deg13', 'deg12', 'deg11', 'deg09', 'deg08', 'deg07', 'deg06', 'deg05', 'deg03', 'deg02', 'deg01', 'fctname6', 'departfct', 'lr01', 'lr03', 'lr05', 'lrl08', 'lr', 'lrl09'], 'string', 'max' => 100],
            [['borednote', 'depressnote', 'foleynote', 'ngnote', 'pcnnote', 'tranote', 'woundnote', 'insulinnote', 'windpipenote', 'phynote', 'pranote', 'dietnote', 'envnote', 'sernote', 'compnote', 'other', 'notefct', 'lr02', 'lr04', 'lr06', 'lrl01'], 'string', 'max' => 200],
            [['tr01', 'tr02', 'tr03', 'tr15', 'tr14', 'tr13', 'tr12', 'tr11', 'tr10', 'tr09', 'tr08', 'tr07', 'tr06', 'tr05', 'tr04'], 'string', 'max' => 30],
            [['cid'], 'string', 'max' => 13],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fct_id' => 'Fct ID',
            'fctdate' => 'Fctdate',
            'home' => 'Home',
            'homept' => 'Homept',
            't' => 'T',
            'pr' => 'Pr',
            'rr' => 'Rr',
            'bp' => 'Bp',
            'feel' => 'Feel',
            'eat' => 'Eat',
            'stool' => 'Stool',
            'urin' => 'Urin',
            'commu' => 'Commu',
            'mental' => 'Mental',
            'self' => 'Self',
            'lesion' => 'Lesion',
            'fall' => 'Fall',
            'sore' => 'Sore',
            'heart' => 'Heart',
            'hearta' => 'Hearta',
            'heartnote' => 'Heartnote',
            'social' => 'Social',
            'sociala' => 'Sociala',
            'socialnote' => 'Socialnote',
            'bored' => 'Bored',
            'borednote' => 'Borednote',
            'depress' => 'Depress',
            'depressnote' => 'Depressnote',
            'foley' => 'Foley',
            'foleynote' => 'Foleynote',
            'ng' => 'Ng',
            'ngnote' => 'Ngnote',
            'pcn' => 'Pcn',
            'pcnnote' => 'Pcnnote',
            'tra' => 'Tra',
            'tranote' => 'Tranote',
            'wound' => 'Wound',
            'woundnote' => 'Woundnote',
            'insulin' => 'Insulin',
            'insulinnote' => 'Insulinnote',
            'windpipe' => 'Windpipe',
            'windpipenote' => 'Windpipenote',
            'phy' => 'Phy',
            'phynote' => 'Phynote',
            'pra' => 'Pra',
            'pranote' => 'Pranote',
            'diet' => 'Diet',
            'dietnote' => 'Dietnote',
            'env' => 'Env',
            'envnote' => 'Envnote',
            'ser' => 'Ser',
            'sernote' => 'Sernote',
            'comp' => 'Comp',
            'compnote' => 'Compnote',
            'timeu' => 'Timeu',
            'times' => 'Times',
            'datenext' => 'Datenext',
            'other' => 'Other',
            'other2' => 'Other2',
            'datedc' => 'Datedc',
            'notefct' => 'Notefct',
            'tr01' => 'Tr01',
            'tr02' => 'Tr02',
            'tr03' => 'Tr03',
            'deg04' => 'Deg04',
            'deg15' => 'Deg15',
            'deg14' => 'Deg14',
            'deg13' => 'Deg13',
            'deg12' => 'Deg12',
            'deg11' => 'Deg11',
            'deg10' => 'Deg10',
            'deg09' => 'Deg09',
            'deg08' => 'Deg08',
            'deg07' => 'Deg07',
            'deg06' => 'Deg06',
            'deg05' => 'Deg05',
            'deg03' => 'Deg03',
            'deg02' => 'Deg02',
            'deg01' => 'Deg01',
            'tr15' => 'Tr15',
            'tr14' => 'Tr14',
            'tr13' => 'Tr13',
            'tr12' => 'Tr12',
            'tr11' => 'Tr11',
            'tr10' => 'Tr10',
            'tr09' => 'Tr09',
            'tr08' => 'Tr08',
            'tr07' => 'Tr07',
            'tr06' => 'Tr06',
            'tr05' => 'Tr05',
            'tr04' => 'Tr04',
            'fctname1' => 'Fctname1',
            'fctname2' => 'Fctname2',
            'fctname3' => 'Fctname3',
            'fctname4' => 'Fctname4',
            'fctname5' => 'Fctname5',
            'fctname6' => 'Fctname6',
            'departfct' => 'Departfct',
            'lr01' => 'Lr01',
            'lr02' => 'Lr02',
            'lr03' => 'Lr03',
            'lr04' => 'Lr04',
            'lr05' => 'Lr05',
            'lr06' => 'Lr06',
            'lr07' => 'Lr07',
            'lr08' => 'Lr08',
            'lr09' => 'Lr09',
            'lr10' => 'Lr10',
            'lrl01' => 'Lrl01',
            'lrl02' => 'Lrl02',
            'lrl03' => 'Lrl03',
            'lrl04' => 'Lrl04',
            'lrl05' => 'Lrl05',
            'lrl06' => 'Lrl06',
            'lrl07' => 'Lrl07',
            'lrl08' => 'Lrl08',
            'lr' => 'Lr',
            'lrl10' => 'Lrl10',
            'lrl11' => 'Lrl11',
            'lrl09' => 'Lrl09',
            'cid' => 'Cid',
            'status' => 'Status',
            'fcthosin_id' => 'พื้นที่',
        ];
    }
}
