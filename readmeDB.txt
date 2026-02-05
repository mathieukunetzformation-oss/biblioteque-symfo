INSERT INTO book (isbn_id, title, author, category_id) VALUES
('978000000001', 'The Dragon Realm', 'A. K. Winters', 1),       -- Fantasy
('978000000002', 'Shadows of Magic', 'L. M. Crowe', 1),         -- Fantasy

('978000000003', 'Beyond the Stars', 'Ethan Cole', 2),         -- Science-Fiction
('978000000004', 'The Last Colony', 'Mira Stone', 2),          -- Science-Fiction

('978000000005', 'The Life of Tesla', 'Robert Jenkins', 3),    -- Biographie
('978000000006', 'Becoming a Legend', 'Sarah Mitchell', 3),   -- Biographie

('978000000007', 'Silent Witness', 'Daniel Price', 4),        -- Thriller
('978000000008', 'The Final Hour', 'Nina Brooks', 4),          -- Thriller

('978000000009', 'Love in Paris', 'Emily Hart', 5),            -- Romance
('978000000010', 'Forever Yours', 'Olivia Bennett', 5),       -- Romance

('978000000011', 'The Art of Thinking', 'Mark Reynolds', 6),   -- Non-Fiction
('978000000012', 'Habits of Success', 'Laura Kim', 6);         -- Non-Fiction


INSERT INTO category (name) VALUES
('Fantasy'),
('Science-Fiction'),
('Biographie'),
('Thriller'),
('Romance'),
('Non-Fiction');


INSERT INTO exemplaire (is_available, book_id) VALUES
(1, 13),
(1, 13),
(0, 13),

(1, 15),
(0, 15),

(1, 16),
(1, 16),

(1, 19),
(0, 19),

(1, 21),
(1, 21),

(0, 22),

(1, 23),
(1, 24),
(0, 24);
