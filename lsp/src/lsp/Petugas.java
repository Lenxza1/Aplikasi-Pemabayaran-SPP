/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package lsp;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;
/**
 *
 * @author Naufal
 */
public class Petugas extends javax.swing.JFrame {
    public Statement st;
    public ResultSet rs;
    public DefaultTableModel tabModelSiswa,tabModelPetugas,tabModelKelas,tabModelSpp,tabModelTransaksi, tabModelLaporan;
    Connection cn = koneksi.con();
    String nama;

    /**
     * Creates new form Petugas
     */
    public Petugas(String nama) {
        initComponents();
        welcometxt.setText("Selamat Datang, " + nama);
        this.nama = nama;
        judulTransaksi();
        tampilDataTransaksi("");
    }
    
    public void judulTransaksi() {
        Object[] judul = {
            "ID", "ID Petugas" , "ID Siswa", "Tanggal bayar", "Bulan Bayar", "Tahun Bayar", "ID Spp", "Jumlah Bayar"
        };
        tabModelTransaksi = new DefaultTableModel (null, judul);
        tableTransaksi.setModel(tabModelTransaksi);
    }
    
    public void tampilDataTransaksi(String where) {
          try {
              st = cn.createStatement();
              tabModelTransaksi.getDataVector().removeAllElements();
              tabModelTransaksi.fireTableDataChanged();
              rs = st.executeQuery("SELECT * FROM pembayaran " + where);
              
          while (rs.next()) {
              Object[] data = {
              rs.getString("id"),
              rs.getString("id_petugas"),
              rs.getString("id_siswa"),
              rs.getString("tgl_bayar"),
              rs.getString("bulan_bayar"),
              rs.getString("tahun_bayar"),
              rs.getString("id_spp"),
              rs.getString("jumlah_bayar"),
          };
          
            tabModelTransaksi.addRow(data);
            tabModelLaporan.addRow(data);
          } 
        } catch(Exception e) {
         e.printStackTrace();
        }
      }
    
    public void resetTransaksi() {
        idTransaksi.setText("");
        idPetugasTransaksi.setText("");
        idSIswaTransaksi.setText("");
        tanggalBayar.setText("");
        bulanBayar.setText("");
        tahunBayar.setText("");
        idSppTransaksi.setText("");
        jumlahBayar.setText("");
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jTabbedPane1 = new javax.swing.JTabbedPane();
        jPanel1 = new javax.swing.JPanel();
        welcometxt = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jPanel2 = new javax.swing.JPanel();
        jScrollPane6 = new javax.swing.JScrollPane();
        tableTransaksi = new javax.swing.JTable();
        idTransaksi = new javax.swing.JTextField();
        jLabel27 = new javax.swing.JLabel();
        jLabel28 = new javax.swing.JLabel();
        idPetugasTransaksi = new javax.swing.JTextField();
        idSIswaTransaksi = new javax.swing.JTextField();
        jLabel29 = new javax.swing.JLabel();
        jLabel30 = new javax.swing.JLabel();
        tanggalBayar = new javax.swing.JTextField();
        bulanBayar = new javax.swing.JTextField();
        jLabel31 = new javax.swing.JLabel();
        jLabel32 = new javax.swing.JLabel();
        tahunBayar = new javax.swing.JTextField();
        idSppTransaksi = new javax.swing.JTextField();
        jLabel33 = new javax.swing.JLabel();
        jLabel34 = new javax.swing.JLabel();
        jumlahBayar = new javax.swing.JTextField();
        DeletebtnTransaksi = new javax.swing.JButton();
        UpdatebtnTransaksi = new javax.swing.JButton();
        RefreshbtnTransaksi = new javax.swing.JButton();
        tambahDataTransaksi = new javax.swing.JButton();
        Printbtn = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        welcometxt.setFont(new java.awt.Font("Segoe UI", 1, 24)); // NOI18N
        welcometxt.setText("Selamat Datang, ");

        jLabel2.setFont(new java.awt.Font("Segoe UI", 0, 14)); // NOI18N
        jLabel2.setText("Di Aplikasi SPP");

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(436, 436, 436)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(welcometxt)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(43, 43, 43)
                        .addComponent(jLabel2)))
                .addContainerGap(590, Short.MAX_VALUE))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(62, 62, 62)
                .addComponent(welcometxt)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jLabel2)
                .addContainerGap(393, Short.MAX_VALUE))
        );

        jTabbedPane1.addTab("Dashboard", jPanel1);

        tableTransaksi.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null, null, null, null, null},
                {null, null, null, null, null, null, null, null},
                {null, null, null, null, null, null, null, null},
                {null, null, null, null, null, null, null, null}
            },
            new String [] {
                "ID", "ID Petugas", "ID Siswa", "Tanggal Bayar", "Bulan Bayar", "Tahun Bayar", "ID Spp", "Jumlah Bayar"
            }
        ));
        tableTransaksi.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                tableTransaksiMouseClicked(evt);
            }
        });
        jScrollPane6.setViewportView(tableTransaksi);

        jLabel27.setText("ID");

        jLabel28.setText("ID Petugas");

        jLabel29.setText("ID Siswa");

        jLabel30.setText("Tanggal Bayar");

        jLabel31.setText("Bulan Bayar");

        jLabel32.setText("Tahun Bayar");

        jLabel33.setText("ID SPP");

        jLabel34.setText("Jumlah Bayar");

        DeletebtnTransaksi.setText("Delete");
        DeletebtnTransaksi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                DeletebtnTransaksiActionPerformed(evt);
            }
        });

        UpdatebtnTransaksi.setText("Update");
        UpdatebtnTransaksi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                UpdatebtnTransaksiActionPerformed(evt);
            }
        });

        RefreshbtnTransaksi.setText("Refresh");
        RefreshbtnTransaksi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                RefreshbtnTransaksiActionPerformed(evt);
            }
        });

        tambahDataTransaksi.setText("Tambah Data");
        tambahDataTransaksi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                tambahDataTransaksiActionPerformed(evt);
            }
        });

        Printbtn.setText("Print");
        Printbtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                PrintbtnActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane6, javax.swing.GroupLayout.PREFERRED_SIZE, 840, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel27, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(idTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel28, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(idPetugasTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel29, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(idSIswaTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel30, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(tanggalBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel31, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(bulanBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel32, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(tahunBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel33, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(idSppTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGroup(jPanel2Layout.createSequentialGroup()
                                    .addComponent(jLabel34, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGap(18, 18, 18)
                                    .addComponent(jumlahBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE)))
                            .addGroup(jPanel2Layout.createSequentialGroup()
                                .addComponent(DeletebtnTransaksi)
                                .addGap(18, 18, 18)
                                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(Printbtn)
                                    .addGroup(jPanel2Layout.createSequentialGroup()
                                        .addComponent(UpdatebtnTransaksi)
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                        .addComponent(RefreshbtnTransaksi)))))
                        .addContainerGap(70, Short.MAX_VALUE))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(tambahDataTransaksi)
                        .addContainerGap())))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(tambahDataTransaksi)
                        .addGap(25, 25, 25)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel27)
                            .addComponent(idTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel28)
                            .addComponent(idPetugasTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel29)
                            .addComponent(idSIswaTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel30)
                            .addComponent(tanggalBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel31)
                            .addComponent(bulanBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel32)
                            .addComponent(tahunBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel33)
                            .addComponent(idSppTransaksi, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel34)
                            .addComponent(jumlahBayar, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(34, 34, 34)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(DeletebtnTransaksi)
                            .addComponent(UpdatebtnTransaksi)
                            .addComponent(RefreshbtnTransaksi))
                        .addGap(18, 18, 18)
                        .addComponent(Printbtn))
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addGap(20, 20, 20)
                        .addComponent(jScrollPane6, javax.swing.GroupLayout.PREFERRED_SIZE, 475, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap(24, Short.MAX_VALUE))
        );

        jTabbedPane1.addTab("Transaksi", jPanel2);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jTabbedPane1)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jTabbedPane1)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void tableTransaksiMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_tableTransaksiMouseClicked
        idTransaksi.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 0).toString());
        idPetugasTransaksi.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 1).toString());
        idSIswaTransaksi.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 2).toString());
        tanggalBayar.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 3).toString());
        bulanBayar.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 4).toString());
        tahunBayar.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 5).toString());
        idSppTransaksi.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 6).toString());
        jumlahBayar.setText(tableTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 7).toString());

        DeletebtnTransaksi.setEnabled(true);
        UpdatebtnTransaksi.setEnabled(true);
    }//GEN-LAST:event_tableTransaksiMouseClicked

    private void DeletebtnTransaksiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_DeletebtnTransaksiActionPerformed
        try{
            int jawab;

            if ((jawab = JOptionPane.showConfirmDialog(null, "ingin menghapus data?","Konfirmasi",JOptionPane.YES_NO_OPTION)) == 0) {
                st = cn.createStatement();
                st.executeUpdate("DELETE FROM pembayaran WHERE id='"
                    + tabModelTransaksi.getValueAt(tableTransaksi.getSelectedRow(), 0) + "'");
                tampilDataTransaksi("");
                resetTransaksi();
            }
            JOptionPane.showMessageDialog(null, "Berhasil");
        } catch (Exception e) {
            e.printStackTrace();
            JOptionPane.showMessageDialog(null, e);
        }
    }//GEN-LAST:event_DeletebtnTransaksiActionPerformed

    private void UpdatebtnTransaksiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_UpdatebtnTransaksiActionPerformed
        try{
            st = cn.createStatement();
            st.executeUpdate("UPDATE pembayaran set "
                +"id_petugas='"          +idPetugasTransaksi.getText() + "', "
                +"id_siswa='"          +idSIswaTransaksi.getText() + "', "
                +"tgl_bayar='"          +tanggalBayar.getText() + "', "
                +"bulan_bayar='"          +bulanBayar.getText() + "', "
                +"tahun_bayar='"          +tahunBayar.getText() + "', "
                +"id_spp='"          +idSppTransaksi.getText() + "', "
                +"jumlah_bayar='"          +jumlahBayar.getText() + "', "
                +" where " + "id='"+idTransaksi.getText()+"'");
            tampilDataTransaksi("");
            JOptionPane.showMessageDialog(null, "Update Berhasil");
            resetTransaksi();
        }catch (Exception e) {
            e.printStackTrace();
        }
    }//GEN-LAST:event_UpdatebtnTransaksiActionPerformed

    private void RefreshbtnTransaksiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_RefreshbtnTransaksiActionPerformed
        tampilDataTransaksi("");
    }//GEN-LAST:event_RefreshbtnTransaksiActionPerformed

    private void tambahDataTransaksiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_tambahDataTransaksiActionPerformed
        tambahTransaksi tt = new tambahTransaksi();
        tt.setVisible(true);
    }//GEN-LAST:event_tambahDataTransaksiActionPerformed

    private void PrintbtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_PrintbtnActionPerformed
        try {
            if (! tableTransaksi.print()) {
                System.err.println("User cancelled printing");
            }
        } catch (java.awt.print.PrinterException e) {
            System.err.format("Cannot print %s%n", e.getMessage());
        }
    }//GEN-LAST:event_PrintbtnActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Petugas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Petugas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Petugas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Petugas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Petugas("").setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton DeletebtnTransaksi;
    private javax.swing.JButton Printbtn;
    private javax.swing.JButton RefreshbtnTransaksi;
    private javax.swing.JButton UpdatebtnTransaksi;
    private javax.swing.JTextField bulanBayar;
    private javax.swing.JTextField idPetugasTransaksi;
    private javax.swing.JTextField idSIswaTransaksi;
    private javax.swing.JTextField idSppTransaksi;
    private javax.swing.JTextField idTransaksi;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel27;
    private javax.swing.JLabel jLabel28;
    private javax.swing.JLabel jLabel29;
    private javax.swing.JLabel jLabel30;
    private javax.swing.JLabel jLabel31;
    private javax.swing.JLabel jLabel32;
    private javax.swing.JLabel jLabel33;
    private javax.swing.JLabel jLabel34;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JScrollPane jScrollPane6;
    private javax.swing.JTabbedPane jTabbedPane1;
    private javax.swing.JTextField jumlahBayar;
    private javax.swing.JTable tableTransaksi;
    private javax.swing.JTextField tahunBayar;
    private javax.swing.JButton tambahDataTransaksi;
    private javax.swing.JTextField tanggalBayar;
    private javax.swing.JLabel welcometxt;
    // End of variables declaration//GEN-END:variables
}
