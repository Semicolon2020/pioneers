/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransportgui;

import java.util.Properties;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.mail.Authenticator;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;


public class JavaMail {
    
    public static void SendMail(String recepient,String subject) throws Exception {
        
        Properties properties = new Properties();
        properties.put("mail.smtp.auth", "true");
        properties.put("mail.smtp.starttls.enable", "true");
        properties.put("mail.smtp.host", "smtp.gmail.com");
        properties.put("mail.smtp.port", "465");
        properties.put("mail.transport.protocol", "smtp");
        
        String MyEmail="kaisbouafif072@gmail.com";
        String mdpEmail="Kaiskais123123";
        
        Session session= Session.getInstance(properties, new Authenticator() {
            @Override
            protected PasswordAuthentication getPasswordAuthentication() {
                return new PasswordAuthentication(MyEmail, mdpEmail);
            }          
        });
        
        Message message= prepareMessage(session,MyEmail,recepient,subject);

        Transport.send(message);
        System.out.println("Message sent :)");
        
    
}

    private static Message prepareMessage(Session session,String MyEmail,String recepient,String subject) {
        try {
            Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress(MyEmail));
            message.setRecipient(Message.RecipientType.TO, new InternetAddress(recepient));
            message.setSubject("bus arrive");
            message.setText(subject);
            return message;
        } catch (Exception ex) {
            Logger.getLogger(JavaMail.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        return null;
    }
    
}

