USE [UPTech]
GO

UPDATE [UPTech].[dbo].[Reservation]
SET [Nom] = 'David',
    [Mail] = 'David@exemple.com'
WHERE [Date] = '2024-04-20T08:00:00' AND [Machine] = 1;


