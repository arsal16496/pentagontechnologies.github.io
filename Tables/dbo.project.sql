CREATE TABLE [dbo].[project]
(
[pid] [int] NOT NULL,
[eid] [int] NOT NULL,
[pname] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[duedate] [date] NOT NULL,
[subdate] [date] NOT NULL,
[mark] [int] NOT NULL,
[status] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL
) ON [PRIMARY]
GO
