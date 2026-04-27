CREATE DATABASE IF NOT EXISTS roadmaker
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE roadmaker;

-- Current production state:
-- the public site initializes a MySQL connection but does not require tables yet.
-- Add CREATE TABLE statements here when dynamic features are introduced.