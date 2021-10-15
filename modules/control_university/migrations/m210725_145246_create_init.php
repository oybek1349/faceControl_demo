<?php

use yii\db\Migration;

/**
 * Class m210725_145246_create_init
 */
class m210725_145246_create_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(){

        $tableOptions = null;
        if ( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        elseif( $this->db->driverName === 'pgsql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci';
        }

        $this->createTable('{{%attlog}}', [            
            'employeeID' => $this->string(50)->notNull(), // xodimID
            'authDateTime' => $this->dateTime(6)->notNull(), // royxat.o't. sana vaqti
            'authDate' => $this->date(50)->notNull(), // royxat.o't.kuni
            'authTime' => $this->time(6)->notNull(),  // royxat.o't.vaqti
            'direction' => $this->string(50)->notNull(), //yo'nalish
            'divaceName' => $this->string(50)->notNull(), // qurilma nomi
            'divaceSN' => $this->string(50)->notNull(), //qurilma serial nomer
            'personName' => $this->string(50)->notNull(), // shaxs ismi
            'cardNo' => $this->string(50)->notNull(), // karta nomeri
        ]);


        $this->createTable('{{%xodimlar}}', [
            'id' => $this->primaryKey(),
            'xodimID' => $this->string(50)->defaultValue(null),            
            'ismi' => $this->string(64)->notNull(),
            'tabel_nomer' => $this->string(16)->defaultValue(null),
            'bolimlar_id' => $this->integer()->defaultValue(null),
            'lavozimlar_id' => $this->integer()->defaultValue(null),
            'ish_jadvallari_id' => $this->integer()->defaultValue(null),
            'uy_manzil' => $this->string(64)->defaultValue(null), 
            'cardNo' => $this->string(50)->defaultValue(null),
            'tel_raqam' => $this->string(20)->defaultValue(null),
            'rasm' => $this->text()->defaultValue(null),
        ]);

        $this->createTable('{{%ish_jadvallari}}', [
            'id' => $this->primaryKey(),
            'ish_boshlanish_vaqti' => $this->time()->notNull(),
            'ish_tugash_vaqti' => $this->time()->notNull(),
            'ish_grafigi' => $this->string(64)->defaultValue(null),
            'tarif' => $this->string(64)->defaultValue(null),
            'qoshimcha' => $this->string(64)->defaultValue(null), 
        ]);

        $this->createTable('{{%bolimlar}}', [
            'id' => $this->primaryKey(),
            'nomlanishi' => $this->string(64)->unique(),
            'tarif' => $this->string(64)->defaultValue(null),
        ]);

        $this->createTable('{{%lavozimlar}}', [
            'id' => $this->primaryKey(),
            'nomlanishi' => $this->string(64)->unique(),
            'tarif' => $this->string(64)->defaultValue(null),
        ]);



       // ‘bolim‘ ustuni uchun index yaratish
       $this->createIndex('idx-xodimlar-bolimlar_id', '{{%xodimlar}}', 'bolimlar_id');
        // tashqi kalit qo'shish ‘bolimlar‘ jadvali uchun
       $this->addForeignKey('fk-xodimlar-bolimlar_id', '{{%xodimlar}}', 'bolimlar_id', '{{%bolimlar}}', 'id', 'SET NULL');

       // ‘lavozim‘ ustuni uchun index yaratish
       $this->createIndex('idx-xodimlar-lavozimlar_id', '{{%xodimlar}}', 'lavozimlar_id');
        // tashqi kalit qo'shish ‘lavozimlar‘ jadvali uchun
       $this->addForeignKey('fk-xodimlar-lavozimlar_id', '{{%xodimlar}}', 'lavozimlar_id', '{{%lavozimlar}}', 'id', 'SET NULL');

       // ‘ish_jadvallari_id‘ ustuni uchun index yaratish
       $this->createIndex('idx-xodimlar-ish_jadvallari_id', '{{%xodimlar}}', 'ish_jadvallari_id');
        // tashqi kalit qo'shish ‘ish_jadvallari‘ jadvali uchun
       $this->addForeignKey('fk-xodimlar-ish_jadvallari_id', '{{%xodimlar}}', 'ish_jadvallari_id', '{{%ish_jadvallari}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(){
        
        echo "m210725_145246_create_init cannot be reverted.\n";

        return false;
    }

    
}
