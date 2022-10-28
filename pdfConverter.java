package pdfConverter;

// External libraries
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

public class pdfConverter {

    public static void main(String[] args) throws IOException {

        // Directory file path
        File directoryFile = new File("C:\\xampp\\htdocs\\phpfileupload\\uploads");

        // List files inside directory file
        File filePaths[] = directoryFile.listFiles();

        for(File files:filePaths) {

            // Load PDF document file path
            PDDocument pdfDoc = PDDocument.load(files.getAbsoluteFile());

            //Instantiate PDFTextStripper class
            PDFTextStripper readPdf = new PDFTextStripper();

            //Retrieve text from PDF document
            String text = readPdf.getText(pdfDoc);

            // Write PDF text into text file
            // Save the file into "converted" folder
            FileWriter insertText = new FileWriter("C:\\xampp\\htdocs\\phpfileupload\\converted\\Converted.txt");
            insertText.write(text);

            // Close both files
            insertText.close();
            pdfDoc.close();
        }
    }
}
