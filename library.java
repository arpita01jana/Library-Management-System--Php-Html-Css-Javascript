import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;
import java.util.List;

class Book {
    private int id;
    private String title;
    private String author;

    public Book(int id, String title, String author) {
        this.id = id;
        this.title = title;
        this.author = author;
    }

    public int getId() {
        return id;
    }

    public String getTitle() {
        return title;
    }

    public String getAuthor() {
        return author;
    }

    @Override
    public String toString() {
        return "Book{" +
                "id=" + id +
                ", title='" + title + '\'' +
                ", author='" + author + '\'' +
                '}';
    }
}

class User {
    private int id;
    private String name;

    public User(int id, String name) {
        this.id = id;
        this.name = name;
    }

    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    @Override
    public String toString() {
        return "User{" +
                "id=" + id +
                ", name='" + name + '\'' +
                '}';
    }

}

class Library {
    private List<Book> books;
    private List<User> users;

    public Library() {
        this.books = new ArrayList<>();
        this.users = new ArrayList<>();
    }

    public void addBook(Book book) {
        books.add(book);
    }

    public void addUser(User user) {
        users.add(user);
    }

    public void displayBooks() {
        System.out.println("Books in the library:");
        for (Book book : books) {
            System.out.println(book);
        }
    }

    public void displayUsers() {
        System.out.println("Users in the library:");
        for (User user : users) {
            System.out.println(user);
        }
    }

}

public class LibraryManagementSystemGUI {
    private static Library library;

    public static void main(String[] args) {
        library = new Library();

        SwingUtilities.invokeLater(() -> {
            createAndShowGUI();
        });
    }

    private static void createAndShowGUI() {
        JFrame frame = new JFrame("Library Management System");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JTabbedPane tabbedPane = new JTabbedPane();
        tabbedPane.addTab("Books", createBooksPanel());
        tabbedPane.addTab("Users", createUsersPanel());

        frame.getContentPane().add(tabbedPane, BorderLayout.CENTER);

        frame.setSize(400, 300);
        frame.setLocationRelativeTo(null);
        frame.setVisible(true);
    }

    private static JPanel createBooksPanel() {
        JPanel panel = new JPanel(new BorderLayout());

        JTextArea booksTextArea = new JTextArea();
        booksTextArea.setEditable(false);
        JScrollPane scrollPane = new JScrollPane(booksTextArea);

        JButton displayBooksButton = new JButton("Display Books");
        displayBooksButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                displayBooks(booksTextArea);
            }
        });

        panel.add(displayBooksButton, BorderLayout.NORTH);
        panel.add(scrollPane, BorderLayout.CENTER);

        return panel;
    }

    private static JPanel createUsersPanel() {
        JPanel panel = new JPanel(new BorderLayout());

        JTextArea usersTextArea = new JTextArea();
        usersTextArea.setEditable(false);
        JScrollPane scrollPane = new JScrollPane(usersTextArea);

        JButton displayUsersButton = new JButton("Display Users");
        displayUsersButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                displayUsers(usersTextArea);
            }
        });

        panel.add(displayUsersButton, BorderLayout.NORTH);
        panel.add(scrollPane, BorderLayout.CENTER);

        return panel;
    }

    private static void displayBooks(JTextArea textArea) {
        textArea.setText("");
        List<Book> books = new ArrayList<>(library.getBooks());
        for (Book book : books) {
            textArea.append(book.toString() + "\n");
        }
    }

    private static void displayUsers(JTextArea textArea) {
        textArea.setText("");
        List<User> users = new ArrayList<>(library.getUsers());
        for (User user : users) {
            textArea.append(user.toString() + "\n");
        }
    }
}
