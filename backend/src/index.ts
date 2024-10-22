import 'dotenv/config';
import express from 'express';
import { initPostRoutes } from './handlers/routes/post-routes';
import { AppDataSource } from './database/database';
import './services/EmailScheduler';
import cors from 'cors';
import bodyParser from 'body-parser';

const main = async () => {
  const app = express();
  app.use(cors());

  const port = 3000;

  try {
    await AppDataSource.initialize();
    console.log('Successfully connected to database');
  } catch (error) {
    console.error('Cannot contact database', error);
    process.exit(1);
  }

  //body parser
  app.use(bodyParser.json());

  initPostRoutes(app);

  app.listen(port, () => {
    console.log(`Server running on port ${port}`);
  });
};

main();