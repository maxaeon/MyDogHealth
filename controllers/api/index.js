const router = require('express').Router();
const userRoutes = require('./userRoutes');
const appointmentRoutes = require('./appointmentRoutes');
const dogRoutes = require('./dogRoutes')
const veterinarianRoutes = require('./veterinarianRoutes')
const medicationRoutes = require('./medicationRoutes')
const foodRoutes = require('./foodRoutes')
const historyRoutes = require('./historyRoutes')

// route.use('/dogs',dogsRoutes)
// collect endpoints and prefix them
// router instance uses these prefixes

//  ./api/appointment/appointmentRoutes
router.use('/appointment', appointmentRoutes);
//  ./api/veterinarian/veterinarianRoutes
router.use('/veterinarian', veterinarianRoutes )
//  .api/users/userRoutes
router.use("/users", userRoutes);
//  .api/dogs/dogsRoutes
router.use("/dog", dogRoutes);
//  .api/medication/medicationRoutes
router.use("/medication", medicationRoutes);
//  .api/foods/foodRoutes
router/use("/food", foodRoutes);
//  .api/history/historyRoutes
router/use("/history", historyRoutes);


module.exports = router;
